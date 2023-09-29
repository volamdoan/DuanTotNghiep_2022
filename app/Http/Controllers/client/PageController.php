<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function chinhsachdoitra()
    {

        return view('client.index.page.chinhsachdoitra');
    }
    public function chinhsachsudungweb()
    {

        return view('client.index.page.chinhsachwebsite');
    }
    public function chinhsachgiaohang()
    {

        return view('client.index.page.chinhsachgiaohang');
    }
    public function dieukhoansudung()
    {

        return view('client.index.page.dieukhoansudung');
    }
    public function huongdanmuahang()
    {

        return view('client.index.page.huongdanmuahang');
    }
    public function chinhsachbaomat()
    {

        return view('client.index.page.chinhsachbaomat');
    }
    public function phuongthucthanhtoan()
    {

        return view('client.index.page.chinhsachthanhtoan');
    }
}
