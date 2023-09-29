<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filer = $request->filter ?? 'ASC';
        $loai = $request->loai ?? 'price';

        $product = Product::where('status', '=', '0')->orderBy($loai, $filer)->paginate(5); // loại id, price

        $category = Category::where('status', '=', '0')->get();
        return view('client.index.shop', compact('product', 'category'));
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


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function product_cate($id)
    {
        $category = Category::where('status', '=', '0')->get();
        $categories = DB::table('categories')
            ->join('products', 'products.category_id', '=', 'categories.id')
            ->where('categories.id', '=', $id)
            ->paginate(10);

        return view('client.index.shopa', compact('categories', 'category'));
    }

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
    public function saled(Request $request)
    {
        $category = Category::where('status', '=', '0')->get();
        $saled = Product::where('saled', '>', '1')->orderBy('price_saled', 'asc')->paginate(5);
        return view('client.index.sale', compact('saled', 'category'));
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
