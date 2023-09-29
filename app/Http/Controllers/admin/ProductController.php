<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function _contruct()
    {
        $this->model = new Product();
    }
    public function index(Request $request)
    {

        $product = Product::paginate(5);
        if ($key = request()->key) {
            $product =  Product::orderBy('date', 'DESC')->where('title', 'like',  '%' . $key . '%')->paginate(15);
        }

        return view('admin.product.List', compact('product'));
    }
    public function addProduct()
    {

        $brand = Brand::all();
        $category = Category::all();
        return view('admin.product.addProduct', compact('category', 'brand'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:products',
            'slug' => 'required|unique:products',
            'quantily' => 'required|numeric',
            'price' => 'required|numeric',
            'color' => 'required',
            'date' => 'required|date',
            'thumnail' => 'required|mimes:jpg,bmp,png|file',
            'thumnail_two' => 'required|mimes:jpg,bmp,png|file',


            'category_id' => 'required',
            'brand_id' => 'required',
            'description' => 'required|min:50|max:500',
            'tags' => 'required|starts_with:#',
            'status' => 'required|in:0,1',


        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $input = $request->all();
        $input['size'] = 'S M L XL';
        $input['slug'] = Str::slug($input['slug'], '-');
        if ($request->hasFile('thumnail')) {
            $path = 'uploads/images';
            $thumnail = $request->file('thumnail');
            $image = $thumnail->getClientOriginalName();
            $path_name = $request->file('thumnail')->move(public_path($path), $image);
            $input['thumnail'] = $image;
        }
        if ($request->hasFile('thumnail_two')) {
            $path = 'uploads/images';
            $thumnail_two = $request->file('thumnail_two');
            $images = $thumnail_two->getClientOriginalName();
            $path_name = $request->file('thumnail_two')->move(public_path($path), $images);
            $input['thumnail_two'] = $images;
        }

        $price = $request->get('price');

        $price_saled = $request->get('price_saled');
        if ($price_saled) {
            $by = round($price / $price_saled) * 100;
            $product['saled'] = $by;
        }


        $product = Product::create($input);

        $product->save();
        if ($product) {
            return redirect('/admin/show-product')->with('message', 'Thêm thành công');;
        } else {
            //thông báo lỗi thêm sản phẩm
        }
    }



    public function updated($id)
    {
        $brand = Brand::all();
        $category = Category::all();
        $product = Product::find($id);
        if ($product == null) return redirect('/thongbao');
        return view('admin.product.updatedProduct', compact('product', 'category', 'brand'));
    }
    public function edit(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'slug' => 'required',
            'quantily' => 'required|numeric',
            'price' => 'required|numeric',
            'color' => 'required',
            'thumnail_two' => 'mimes:jpg,bmp,png|file',
            'date' => 'required|date',
            'thumnail' => 'mimes:jpg,bmp,png|file',


            'category_id' => 'required',
            'brand_id' => 'required',
            'description' => 'required',
            'tags' => 'required',
            'status' => 'required|in:0,1',


        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $input = $request->all();
        $input = Product::find($id);
        $input->title = $request->title;

        $input->slug = $request->slug;
        $input->quantily = $request->quantily;
        $input->price = $request->price;
        $input->size = $request->size;
        $input->color = $request->color;
        $input->date = $request->date;
        // check thumbnail nếu có thì thay đổi ko thì giữ nguyên
        if ($request->thumnail) {
            $input->thumnail = $request->thumnail;
            if ($request->hasFile('thumnail')) {
                $path = 'uploads/images';
                $thumnail = $request->file('thumnail');
                $image = $thumnail->getClientOriginalName();
                $path_name = $request->file('thumnail')->move(public_path($path), $image);
                $input['thumnail'] = $image;
            }
        }
        // anh 2
        if ($request->thumnail_two) {
            $input->thumnail_two = $request->thumnail_two;
            if ($request->hasFile('thumnail_two')) {
                $path = 'uploads/images';
                $thumnail_two = $request->file('thumnail_two');
                $images = $thumnail_two->getClientOriginalName();
                $path_name = $request->file('thumnail_two')->move(public_path($path), $images);
                $input['thumnail_two'] = $images;
            }
        }

        $input->view = $request->view;
        $input->category_id = $request->category_id;
        $input->brand_id = $request->brand_id;
        $input->description = $request->description;
        $input->tags = $request->tags;
        $input->status = $request->status;


        $input->price_saled = $request->price_saled;
        if ($request->price_saled) {
            $by = ($request->price / $request->price_saled) * 100;

            $input['saled'] = round($by);
        }

        $sua = $input->save();
        if ($sua) {

            return redirect('/admin/show-product')->with('message', 'Sửa thành công');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/admin/show-product');
    }
}
