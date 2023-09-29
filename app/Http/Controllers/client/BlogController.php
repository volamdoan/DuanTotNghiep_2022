<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function blog()
    {
        Carbon::setLocale('vi');
        $blog = DB::table('posts')
            ->join('categories', 'categories.id', '=', 'posts.category_id')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->orderBy('title', 'DESC')
            ->select('posts.id', 'posts.slug', 'categories.name', 'posts.sumary', 'posts.thumnail_url', 'posts.content', 'posts.title', 'posts.date', 'posts.created_at', 'users.name as tacgia')
            ->paginate(4);
        return view('client.index.blog', compact('blog'));
    }
    public function news($id)
    {
        Carbon::setLocale('vi');
        $news = DB::table('posts')
            ->join('categories', 'categories.id', '=', 'posts.category_id')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->select('posts.id', 'posts.slug', 'categories.name', 'posts.sumary', 'posts.thumnail_url', 'posts.content', 'posts.title', 'posts.date', 'posts.created_at', 'users.name as tacgia')
            ->where('posts.slug', $id)->first();
        $data = ['posts.slug' => $id, 'posts' => $news];
        return view('client.index.news', compact('news'));
    }
}
