<?php

namespace App\Http\Controllers\admin;

use App\Models\Coupon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupon = Coupon::orderBy('coupon_name', 'ASC')->paginate(5);
        if ($key = request()->key) {
            $coupon = Coupon::where('code', 'like',   $key . '%')->paginate(5);
        }
        return view('admin.coupon.list', compact('coupon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coupon.addCoupon');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'coupon_name' => 'required',
            'coupon_condition' => 'required',
            'coupon_number' => 'required',
            'coupon_time' => 'required',
            'status' => 'required|in:0,1',
            'start_at' => 'required|date',
            'expired_at' =>  'required|date|after:start_at'

        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $input = $request->all();
        $coupon = new Coupon();
        $coupon->coupon_name = $input['coupon_name'];
        $coupon->coupon_code = $input['coupon_code'];
        $coupon->coupon_condition = $input['coupon_condition'];
        $coupon->coupon_number = $input['coupon_number'];
        $coupon->coupon_time = $input['coupon_time'];
        $coupon->status = $input['status'];
        $coupon->start_at = $input['start_at'];
        $coupon->expired_at = $input['expired_at'];
        $coupon->save();

        if ($coupon) {
            return redirect('/admin/show-coupon')->with('message', 'Thêm thành công');;
        } else {
            //thông báo lỗi thêm sản phẩm
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupon = Coupon::find($id);
        $coupon->delete();
        return redirect('/admin/show-coupon');
    }
}
