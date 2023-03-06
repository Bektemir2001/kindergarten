<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function form(){
        return view('login');
    }

    public function userAuth(Request $request){
        $user = User::where('email', $request->email)->get();

        if(count($user)){
            $user = $user[0];

            if(Hash::check($request->password, $user->password)){
                Auth::login($user);
                return redirect()->route('index');
            }
            else{
                return redirect()
                    ->back()
                    ->with(['errorWithPassword' => 'incorrect password', 'email' => $request->email]);
            }
        }

        return redirect()
            ->back()
            ->with(['errorWithEmail' => 'user not found', 'email' => $request->email]);
    }
}
