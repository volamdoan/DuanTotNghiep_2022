<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::orderBy('name', 'ASC')->paginate(5);
        if ($key = request()->key) {
            $category = Category::where('name', 'like',   $key . '%')->paginate(10);
        }
        return view('admin.category.List', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCategory()
    {
        return view('admin.category.addCategory');
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
            'name' => 'required|unique:categories',
            'status' => 'required|in:0,1',
            'thumnail' => 'mimes:jpg,bmp,png|file',

        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $input = $request->all();
        $input['slug'] = Str::slug($input['slug'], '-');
        if ($request->hasFile('thumnail')) {
            $path = 'uploads/images';
            $thumnail = $request->file('thumnail');
            $image = $thumnail->getClientOriginalName();
            $path_name = $request->file('thumnail')->move(public_path($path), $image);
            $input['thumnail'] = $image;
        }
        $category = Category::create($input);
        if ($category) {
            return redirect('/admin/show-category')->with('message', 'Thêm thành công');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updated($id)
    {
        $category = Category::find($id);
        if ($category == null) return redirect('/thongbao');
        return view('admin.category.updatedCategory', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'status' => 'required|in:0,1',
            'thumnail' => 'mimes:jpg,bmp,png|file',

        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $input = $request->all();
        $input = Category::find($id);
        $input->name = $request->name;
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
        $input->status = $request->status;
        $input['slug'] = Str::slug($input['slug'], '-');
        $input->save();
        return redirect('/admin/show-category')->with('message', 'Sửa thành công');
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
        $category = Category::find($id);
        $category->delete();
        return redirect('/admin/show-category');
    }
}
