<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {

        return view('client.index.contact');
    }
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        if ($this->isOnline()) {
            $mail_data = [
                'recipient' => 'genzstore2022@gmail.com',
                'fromEmail' => $request->email,
                'fromName' => $request->name,
                'fromPhone' => $request->phone,
                'subject' => $request->subject,
                'body' => $request->message,
            ];
            Mail::send('client/layout/email-template', $mail_data, function ($message) use ($mail_data) {
                $message->to($mail_data['recipient'])
                    ->from($mail_data['fromEmail'], $mail_data['fromName'])
                    ->subject($mail_data['subject']);
            });
            return response()->json(['status' => 1, 'msg' => 'Bạn đã gửi liên hệ thành công']);
        } else {
            return response()->json(['status' => 0, 'msg' => 'Đã lỗi, vui lòng thử lại']);
        }
    }

    public function isOnline($site = "https://www.youtube.com/")
    {
        if (@fopen($site, "r")) {
            return true;
        } else {
            return false;
        }
    }
}
