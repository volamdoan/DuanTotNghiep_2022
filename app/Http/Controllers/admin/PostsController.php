<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PostsController extends Controller
{
    public function _contruct()
    {
        $this->model = new Posts();
    }
    public function index(Request $request)
    {
        $posts = Posts::paginate(5);
        if ($key = request()->key) {
            $posts =  Posts::orderBy('date', 'DESC')->where('title', 'like',   $key . '%')->paginate(5);
        }
        return view('admin.posts.List', compact('posts'));
    }
    public function addPosts()
    {
        $category = Category::all();
        $user = User::all();
        return view('admin.posts.addPosts', compact('user', 'category'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:products',
            'slug' => 'required|unique:products',
            'sumary' => 'required',
            'content' => 'required',
            'date' => 'required|date',
            'thumnail_url' => 'required|mimes:jpg,bmp,png|file',
            'user_id' => 'required',
            'tags' => 'required',
            'status' => 'required|in:0,1',


        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $input = $request->all();
        $input['slug'] = Str::kebab($input['slug']);
        if ($request->hasFile('thumnail_url')) {
            $path = 'uploads/images';
            $thumnail_url = $request->file('thumnail_url');
            $image = $thumnail_url->getClientOriginalName();
            $request->file('thumnail_url')->move(public_path($path), $image);
            $input['thumnail_url'] = $image;
        }
        Posts::create($input);
        return redirect('/admin/show-posts')->with('status', 'Đã thêm bài viết thành công bài viết');
    }
    public function updated(request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:products',
            'slug' => 'required|unique:products',
            'sumary' => 'required',
            'content' => 'required',
            'date' => 'required|date',
            'thumnail_url' => 'mimes:jpg,bmp,png|file',
            'user_id' => 'required',
            'tags' => 'required',
            'status' => 'required|in:0,1',


        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $input = $request->all();
        $input = Posts::find($id);
        $input->title = $request->title;
        $input->slug = $request->slug;
        $input->sumary = $request->sumary;
        $input->content = $request->content;
        $input->date = $request->date;
        if ($request->thumnail_url) {
            $input->thumnail_url = $request->thumnail_url;
            if ($request->hasFile('thumnail_url')) {
                $path = 'uploads/images';
                $thumnail_url = $request->file('thumnail_url');
                $image = $thumnail_url->getClientOriginalName();
                $path_name = $request->file('thumnail_url')->move(public_path($path), $image);
                $input['thumnail_url'] = $image;
            }
        }
        $input->user_id = $request->user_id;
        $input->category_id = $request->category_id;
        $input->tags = $request->tags;
        $input->status = $request->status;
        $input->save();
        return redirect('/admin/show-posts')->with('status', 'Đã cập nhập thành công bài viết');
    }
    public function edit($id)
    {
        $user = User::all();
        $category = Category::all();
        $posts = Posts::find($id);
        return view('admin.posts.updatedPosts', compact('posts', 'category', 'user'));
    }
    public function destroy($id)
    {
        $posts = Posts::find($id);
        $posts->delete();
        return redirect()->back()->with('status', 'Đã xóa bài viết thành công bài viết');
    }
}
