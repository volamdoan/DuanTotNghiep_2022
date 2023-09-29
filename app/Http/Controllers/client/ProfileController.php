<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function edit_profile()
    {

        return view('client.index.profile');
    }
    public function update_profile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            $query = User::find(Auth::user()->id)->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
            ]);
            if (!$query) {
                return response()->json(['status' => 0, 'msg' => 'Đã lỗi, vui lòng thử lại']);
            } else {
                return response()->json(['status' => 1, 'msg' => 'Đã thay đổi thông tin thành công']);
            }
        }
    }

    public function update_picture(Request $request)
    {
        $path = 'client/assets/img/avt/';
        $file = $request->file('user_image');
        $new_name = 'Genz_' . date('Ymd') . uniqid() . '.jpg';

        //Upload ảnh mới
        $upload = $file->move(public_path($path), $new_name);
        if (!$upload) {
            return response()->json(['status' => 0, 'msg' => 'Xin lỗi ! Đã xảy ra lỗi.']);
        } else {
            $oldPicture = User::find(Auth::user()->id)->getAttributes()['picture'];
            if ($oldPicture != '') {
                if (File::exists(public_path($path . $oldPicture))) {
                    File::delete(public_path($path . $oldPicture));
                }
            }
            User::find(Auth::user()->id)->update(['picture' => $new_name]);

            if (!$upload) {
                return response()->json(['status' => 0, 'msg' => 'Xin lỗi ! Đã xảy ra lỗi ngoài ý muốn.']);
            } else {
                return response()->json(['status' => 1, 'msg' => 'Bạn đã thay đổi ảnh đại diện thành công.']);
            }
        }
    }
    public function change_password()
    {
        return view('client.index.password');
    }
    public function update_password(Request $request)
    {
        //Validate form
        $validator = Validator::make($request->all(), [
            'oldpassword' => [
                'required', function ($attribute, $value, $fail) {
                    if (!Hash::check($value, Auth::user()->password)) {
                        return $fail(__('Mật khẩu hiện tại không chính xác'));
                    }
                },
                'min:8',
                'max:30'
            ],
            'newpassword' => 'required|min:8|max:30',
            'cnewpassword' => 'required|same:newpassword'
        ], [
            'oldpassword.required' => 'Nhập mật khẩu hiện tại của bạn',
            'oldpassword.min' => 'Mật khẩu cũ phải có ít nhất 8 ký tự',
            'oldpassword.max' => 'Mật khẩu cũ không được lớn hơn 30 ký tự',
            'newpassword.required' => 'Nhập mật khẩu mới',
            'newpassword.min' => 'Mật khẩu mới phải có ít nhất 8 ký tự',
            'newpassword.max' => 'Mật khẩu mới không được lớn hơn 30 ký tự',
            'cnewpassword.required' => 'Nhập lại mật khẩu mới của bạn',
            'cnewpassword.same' => 'Mật khẩu mới và Xác nhận mật khẩu mới phải khớp nhau'
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {

            $update = User::find(Auth::user()->id)->update(['password' => Hash::make($request->newpassword)]);

            if (!$update) {
                return response()->json(['status' => 0, 'msg' => 'Đã xảy ra lỗi, Không thể cập nhật mật khẩu']);
            } else {
                return response()->json(['status' => 1, 'msg' => 'Mật khẩu của bạn đã được thay đổi thành công']);
            }
        }
    }
}
