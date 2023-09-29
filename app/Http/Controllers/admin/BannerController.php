<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::paginate(5);
        if ($key = request()->key) {
            $banner = Banner::where('name', 'like',  $key . '%')->paginate(10);
        }
        return view('admin.banner.list', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.addBanner');
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
            'name' => 'required|unique:brands',


        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $input = $request->all();
        if ($request->hasFile('image_l')) {
            $path = 'uploads/images';
            $thumnail = $request->file('image_l');
            $image = $thumnail->getClientOriginalName();
            $path_name = $request->file('image_l')->move(public_path($path), $image);
            $input['image_l'] = $image;
        }
        if ($request->hasFile('image_n')) {
            $path = 'uploads/images';
            $thumnail_two = $request->file('image_n');
            $images = $thumnail_two->getClientOriginalName();
            $path_name = $request->file('image_n')->move(public_path($path), $images);
            $input['image_n'] = $images;
        }
        if ($request->hasFile('image_t')) {
            $path = 'uploads/images';
            $thumnail_two = $request->file('image_t');
            $images = $thumnail_two->getClientOriginalName();
            $path_name = $request->file('image_t')->move(public_path($path), $images);
            $input['image_t'] = $images;
        }
        $banner = Banner::create($input);
        return redirect('/admin/show-banner')->with('message', 'Thêm thành công');
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
        $banner = Banner::find($id);
        if ($banner == null) return redirect('/thongbao');
        return view('admin.banner.updatedBanner', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updated(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'image_l' => 'mimes:jpg,bmp,png|file',
            'image_n' => 'mimes:jpg,bmp,png|file',
            'image_t' => 'mimes:jpg,bmp,png|file',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $input = $request->all();
        $input = Banner::find($id);
        $input->name = $request->name;


        // check thumbnail nếu có thì thay đổi ko thì giữ nguyên
        if ($request->image_l) {
            $input->image_l = $request->image_l;
            if ($request->hasFile('image_l')) {
                $path = 'uploads/images';
                $thumnail = $request->file('image_l');
                $image = $thumnail->getClientOriginalName();
                $path_name = $request->file('image_l')->move(public_path($path), $image);
                $input['image_l'] = $image;
            }
        }
        // anh 2
        if ($request->image_n) {
            $input->image_n = $request->image_n;
            if ($request->hasFile('image_n')) {
                $path = 'uploads/images';
                $thumnail_two = $request->file('image_n');
                $images = $thumnail_two->getClientOriginalName();
                $path_name = $request->file('image_n')->move(public_path($path), $images);
                $input['image_n'] = $images;
            }
        }
        if ($request->image_t) {
            $input->image_t = $request->image_t;
            if ($request->hasFile('image_t')) {
                $path = 'uploads/images';
                $thumnail_two = $request->file('image_t');
                $images = $thumnail_two->getClientOriginalName();
                $path_name = $request->file('image_t')->move(public_path($path), $images);
                $input['image_t'] = $images;
            }
        }





        $sua = $input->save();
        if ($sua) {

            return redirect('/admin/show-banner')->with('message', 'Sửa thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        $banner->delete();
        return redirect('/admin/show-banner')->with('message', 'Xóa ảnh bìa thành công');
    }
}
