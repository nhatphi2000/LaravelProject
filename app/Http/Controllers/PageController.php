<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller{


    public function about(){
        return view('about');
    }
    public function showContactForm()
    {
        return view('contact');
    }

    public function submitContactForm(Request $request)
    {
        // Xử lý logic gửi thông tin liên hệ
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Ví dụ: gửi email hoặc lưu thông tin vào cơ sở dữ liệu

        return back()->with('success', 'Cảm ơn bạn đã liên hệ!');
    }
}
