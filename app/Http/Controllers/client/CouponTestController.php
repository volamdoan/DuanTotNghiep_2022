<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
use Illuminate\Support\Facades\Session;

class CouponTestController extends Controller
{
    function checkout_test()
    {
        return view('client.index.test_coupon');
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
                return redirect()->back()->with('message', 'Thêm mã giảm gía thành công');
            }
        } else {
            return redirect()->back()->with('message', 'Mã giảm giá không đúng');
        }
    }
}
