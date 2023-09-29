<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = User::paginate(5);

        if ($key = request()->key) {
            $user =  User::where('name', 'like',  '%' . $key . '%')->paginate(5);
        }

        if ($request->status && $request->role) {
            $status = $request->status;

            $role = $request->role;
            $user = User::where('status', 'like', $status)
                ->where('role', 'like', '%' . $role . '%')->paginate(5);
        }

        return view('admin.user.list', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showUpdate($id)
    {

        $user = User::find($id);
        if ($user == null) return redirect('/thongbao');
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)

    {
        $validator = Validator::make($request->all(), [

            'status' => 'required|in:1,2',


        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $input = $request->all();
        $input = User::find($id);
        $input->status = $request->status;
        $sua = $input->save();
        if ($sua) {
            return redirect('/admin/show-user')->with('message', 'Duyệt thành công');
        }
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
