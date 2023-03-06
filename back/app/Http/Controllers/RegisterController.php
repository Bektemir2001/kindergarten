<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form(){
        return view('register');
    }
    public function register(Request $request){
        $data = $request->validate([
            'name'=>'required|string',
            'surname'=>'required|string',
            'address'=>'required',
            'phone_number'=>'required',
            'email'=>'required',
            'password'=>'required',
            'passport_back'=>'',
            'passport_front'=>''
        ]);
        dd($data);
    }
}
