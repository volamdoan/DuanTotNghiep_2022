<?php

namespace App\Http\Controllers\client;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Session;
use App\Models\City;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\District;
use App\Models\Product;
use App\Models\Ward;
use App\Models\Statistical;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request)
    {

        $city = City::all();

        $district = District::all();
        $ward = Ward::all();
        return view('client.index.checkout', compact('city', 'ward', 'district'));
    }
    function checkout_coupon(Request $request)
    {


        $data = $request->all();

        $coupon = Coupon::where('coupon_code', '=', $data['coupon'])->first();
        if ($coupon) {
            $count_coupon = $coupon->count();
            if ($count_coupon > 0) {
                $count_session = Session::get('coupon');
                if ($count_session == true) {
                    $is_available  = 0;
                    if ($is_available == 0) {
                        $cou[] = array(
                            'coupon_code' => $coupon->coupon_code,
                            'coupon_condition' => $coupon->coupon_condition,
                            'coupon_number' => $coupon->coupon_number,

                        );
                        Session::put('coupon', $cou);
                    }
                } else {
                    $cou[] = array(
                        'coupon_code' => $coupon->coupon_code,
                        'coupon_condition' => $coupon->coupon_condition,
                        'coupon_number' => $coupon->coupon_number,

                    );
                    Session::put('coupon', $cou);
                }
                Session::save();
                return redirect()->back()->with('message', 'Thêm mã giảm giá thành công');
            }
        } else {
            return redirect()->back()->with('message', 'Mã giảm giá không đúng');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name_order' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'email' => 'required|email:rfc,dns',
            'city' => 'required',
            'district' => 'required',
            'ward' => 'required',



        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        // dd(Session::get('Cart')->products);

        //insert payment method
        $data = array();
        $data['payment_method'] = $request->name = "payment_option";
        $data['payment_status'] = 'Đang chờ xử lý';
        $payment_id = DB::table('payment')->insertGetId($data);
        //insert order
        $order_data = array();
        $order_data['user_id'] = Session::get('user_id');
        $order_data['sipping_id'] = Session::get('shipping_id');
        $order_data['payment_id'] = $payment_id;
        if (Session::get('coupon') == null) {
            $order_data['total_price'] = Session::get('Cart')->totaPrice;
        } elseif (Session::get('coupon')['0']['coupon_condition'] == 1) {
            $order_data['total_price'] = Session::get('Cart')->totaPrice - (Session::get('Cart')->totaPrice / 100 * Session::get('coupon')[0]['coupon_number']);
        } else {
            $order_data['total_price'] = Session::get('Cart')->totaPrice -  Session::get('coupon')[0]['coupon_number'];
        }

        $order_data['status'] = '0';
        $order_data['name_order'] = $request->name_order;
        $order_data['phone'] = $request->phone;
        $order_data['address'] = $request->address;
        $order_data['email'] = $request->email;
        $order_data['city'] = $request->city;
        $order_data['district'] = $request->district;
        $order_data['ward'] = $request->ward;
        $order_data['note'] = $request->note;
        $order_data['order_date'] = date('Y-m-d');
        $order_data['updated_at'] = new \DateTime('Asia/Ho_Chi_Minh');
        $order_data['created_at'] = new \DateTime('Asia/Ho_Chi_Minh');
        $order_id = DB::table('orders')->insertGetId($order_data);
        Session::put('order_id',  $order_id);

        //insert orderdetai
        $produ  = Session::get('Cart')->products;
        foreach ($produ as $n) {
            $order_d_data = array();
            $order_d_data['order_id'] = $order_id;
            $order_d_data['product_id'] = $n['productInfo']->id;
            $order_d_data['product_name'] = $n['productInfo']->title;
            $order_d_data['product_price'] = Session::get('Cart')->totaPrice;
            $order_d_data['size_detail'] = $n['sized'];
            $order_d_data['color_detail'] = $n['color'];
            $order_d_data['quantily_order'] = $n['quantily'];
            $order_d_data['total_pro_detail'] = $n['price'];
            $orderdetail_id = OrderDetail::create($order_d_data);
        }
        //thongke






        if ($data['payment_method'] == 1) {
            echo 'Thanh toán khi giao hàng';
        } else {
            echo 'Thanh toán ATM';
        }
        $request->Session()->forget('coupon');

        return redirect('/after-check/' . $order_id)->with('message', 'Thêm thành công');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function vietnam_city($matp)
    {

        // $city = City::all();
        $district = District::where('matp', '=', $matp)->get();
        return response()->json($district);

        // return view('client.index.checkout', compact('district', 'city', 'ward'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ward($maqh)
    {

        // $city = City::all();
        $ward = Ward::where('maqh', '=', $maqh)->get();
        return response()->json($ward);

        // return view('client.index.checkout', compact('district', 'city', 'ward'));
    }
    function unset_coupon()
    {
        $coupon = Session::get('coupon');
        if ($coupon == true) {
            Session::forget('coupon');
            return redirect()->back()->with('message', 'Xóa mã khuyến mãi thành công');
        }
    }
    function afterCheck($id)
    {

        // $orderDetail = DB::table('order_details')
        //     ->join('orders', 'orders.id', '=', 'order_details.order_id')
        //     ->join('products', 'products.id', '=', 'order_details.product_id')
        //     ->where('orders.id', '=', $id)
        //     ->get();

        $order = Order::where('id', '=', $id)->first();
        if ($order == null) return redirect('/thongbao');
        return view('client.index.afterChect', compact('order'));
    }
}
