<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Posts;
use App\Models\Banner;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Cart;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Carbon::setLocale('vi');
        $category = Category::where('status', '=', '0')->paginate(6);
        $trending = Product::where('status', '=', '0')->orderBy('view', 'DESC')->get();
        $blog = DB::table('posts')
            ->join('categories', 'categories.id', '=', 'posts.category_id')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->orderBy('title', 'DESC')
            ->select('posts.id', 'posts.slug', 'categories.name', 'posts.sumary', 'posts.thumnail_url', 'posts.content', 'posts.title', 'posts.date', 'posts.created_at', 'users.name as tacgia')
            ->get();
        $product = Product::where('status', '=', '0')->where('saled', '>', '1')->orderBy('saled', 'DESC')->paginate(10);
        $banner = Banner::all();
        return view('client.index.trangchu', compact('product', 'category', 'trending', 'blog', 'banner'));
    }

    public static  function countProductByIdCate($id) // id danh mục
    {
        return Product::where('category_id', $id)->count();
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function about_us()
    {
        return view('client.index.about-us');
    }
    public function productDetail($id)
    {
        Product::find($id)->increment('view');
        $category = DB::table('categories')
            ->join('products', 'products.category_id', '=', 'categories.id')
            ->where('products.id', '=', $id)
            ->get();
        $brand = DB::table('brands')
            ->join('products', 'products.category_id', '=', 'brands.id')
            ->where('products.id', '=', $id)
            ->get();
        // $products = Product::all();
        $product = Product::find($id);
        $pro = explode(" ", $product['size']);

        $color = explode(" ", $product['color']);

        return view('client.index.productDetail', compact('product', 'category', 'brand', 'pro', 'color'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function SaveListCart($id, Request  $request, $quantily)
    {

        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->saveCart($id, $quantily);
        $request->Session()->put('Cart', $newCart);
        return view('client.index.list-cart');
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
        //
    }
}
