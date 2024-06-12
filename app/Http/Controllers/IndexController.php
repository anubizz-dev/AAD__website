<?php

namespace App\Http\Controllers;

use App\Mail\InquiryEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }

    public function sendMail(Request $request){
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'email|required',
            'message' => 'required',
        ]);

        $email = 'inquiry@aadsoftware-services.com';

        Mail::to($email)->send(
            new InquiryEmail(
                $request->input('firstname'),
                $request->input('lastname'),
                $request->input('email'),
                $request->input('message')
            ));

        return redirect()->back()->with('success', 'Inquiry sent succesfully.');
    }
}
