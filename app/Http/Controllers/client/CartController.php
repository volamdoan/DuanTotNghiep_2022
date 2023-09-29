<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Session;
use App\Cart;
use App\Models\Coupon;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AddCart($id, $sl, Request  $request, $sized, $color)
    {
        $product = DB::table('products')->where('id', $id)->first();
        if ($product != null) {
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $id, $sl, $sized, $color);

            $request->session()->put('Cart', $newCart);
        }
        return view('client.index.cart', compact('newCart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function DeletedCart($id, Request  $request, $sized, $color)
    {


        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->deleteCart($id, $sized, $color);
        if (Count($newCart->products) > 0) {
            $request->Session()->put('Cart', $newCart);
        } else {
            $request->Session()->forget('Cart');
        }
        return view('client.index.cart', compact('newCart'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function listCart()
    {
        return view('client.index.listCart');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function DeletedListCart(Request  $request, $id)
    {


        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->deleteListCart($id);

        if (Count($newCart->products) > 0) {
            $request->Session()->put('Cart', $newCart);
        } else {
            $request->Session()->forget('Cart');
        }
        return view('client.index.list-cart');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function SaveListCart(Request  $request, $id,  $quantily)
    {

        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->saveCart($id, $quantily);

        $request->Session()->put('Cart', $newCart);
        return view('client.index.list-cart');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function AddDetailProduct($id, Request  $request, $quantily, $sized, $color)
    // {
    //     $oldCart = Session('Cart') ? Session('Cart') : null;
    //     $newCart = new Cart($oldCart);
    //     $newCart->saveCart($id, $quantily, $sized, $color);
    //     $request->Session()->put('Cart', $newCart);
    //     return view('client.index.productDetail');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function Xoahet(Request  $request)
    {
        $request->Session()->forget('Cart');
    }
    function checkout_coupon_list()
    {
        return view('client.index.listCart');
    }
    function checkout_coupon(Request $request)
    {

        dd('o');
        // $data = $request->all();

        // $coupon = Coupon::where('coupon_code', '=', $data['coupon'])->first();
        // if ($coupon) {
        //     $count_coupon = $coupon->count();
        //     if ($count_coupon > 0) {
        //         $count_session = Session::get('coupon');
        //         if ($count_session == true) {
        //             $is_available  = 0;
        //             if ($is_available == 0) {
        //                 $cou[] = array(
        //                     'coupon_code' => $coupon->coupon_code,
        //                     'coupon_condition' => $coupon->coupon_condition,
        //                     'coupon_number' => $coupon->coupon_number,

        //                 );
        //                 Session::put('coupon', $cou);
        //             }
        //         } else {
        //             $cou[] = array(
        //                 'coupon_code' => $coupon->coupon_code,
        //                 'coupon_condition' => $coupon->coupon_condition,
        //                 'coupon_number' => $coupon->coupon_number,

        //             );
        //             Session::put('coupon', $cou);
        //         }
        //         Session::save();
        //         return redirect()->back()->with('message', 'Thêm mã giảm gái thành công');
        //     }
        // } else {
        //     return redirect()->back()->with('error', 'Mã giảm giá không đúng');
        // }
    }
}
