<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::orderBy('name_order', 'DESC')->paginate(5);

        if ($key = request()->key) {
            $order = Order::where('name_order', 'like',  '%' . $key . '%')->paginate(5);
        }
        return view('admin.order.list', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $orderDetail = DB::table('order_details')
            ->join('orders', 'orders.id', '=', 'order_details.order_id')
            ->join('products', 'products.id', '=', 'order_details.product_id')
            ->where('orders.id', '=', $id)
            ->get();
        $order = Order::find($id);
        if ($order == null) return redirect('/thongbao');

        return view('admin.orderDetail.list', compact('order', 'orderDetail'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $input = $request->all();
        $input = Order::find($id);
        $input->status = $request->status;
        $input->name_order = $request->name_order;
        $input->phone = $request->phone;
        $input->address = $request->address;
        $input->email = $request->email;
        $input->city = $request->city;
        $input->district = $request->district;
        $input->ward = $request->ward;


        $input->save();
        if ($input) {

            return redirect('/admin/show-order')->with('message', 'Xác nhận thành công');
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
        $order = Order::find($id);
        $order->delete();
        return redirect('/admin/show-order');
    }
}
