<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Posts;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use App\Models\Statistical;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dauthangnay = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();

        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

        // $total_sales = Statistical::whereBetween('order_date', [$dauthangnay, $now])->orderBy('order_date', 'ASC')->sum('sales');

        $order = Order::whereBetween('order_date', [$dauthangnay, $now])->count();
        // $product = OrderDetail::whereBetween('order_date', [$dauthangnay, $now])->sum('quantily_order');
        $product = DB::table('orders')
            ->join('order_details', 'order_details.order_id', '=', 'orders.id')->whereBetween('order_date', [$dauthangnay, $now])->sum('quantily_order');

        $order_price = Order::where('order_date', '>=', $dauthangnay)->where('order_date', '<=', $now)->sum('total_price');
        $orderw = Order::orderBy('name_order', 'ASC')->paginate(5);
        if ($key = request()->key) {
            $orderw = Order::where('name_order', 'like',  '%' . $key . '%')->paginate(5);
        }

        // $total_quantity = Statistical::whereBetween('order_date', [$dauthangnay, $now])->orderBy('order_date', 'ASC')->sum('quantity');
        $user = User::where('role', '=', '1')->count();
        $admin = User::where('role', '=', '2')->count();

        return view('admin.dashboard.dashboard', compact('order_price', 'order', 'product', 'user', 'admin', 'orderw'));
    }

    /**
     * Show the form for creating a new resource.
     *
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
        //
    }
}
