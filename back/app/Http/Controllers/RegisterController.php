<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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
            'passport_front'=>'',
            'passport_back'=>''
        ]);
        $passport_front = null;
        $passport_back = null;
        if(array_key_exists('passport_front',$data)){
            $passport_front = Storage::disk('public')->put('passports', $data['passport_front']);
            $passport_front = "storage/".$passport_front;
        }
        if(array_key_exists('passport_back',$data)){
            $passport_back = Storage::disk('public')->put('passports',$data['passport_back']);
            $passport_back = "storage/".$passport_back;
        }

        $data['password'] = Hash::make($data['password']);

        $user = User::create([
            'name'=>$data['name'],
            'surname'=>$data['surname'],
            'address'=>$data['address'],
            'phone_number'=>$data['phone_number'],
            'email'=>$data['email'],
            'password'=>$data['password'],
            'passport_front'=>$passport_front,
            'passport_back'=>$passport_back
        ]);

        Auth::login($user);

        return redirect()->route('index');
    }
}
