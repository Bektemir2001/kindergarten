<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Child;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
        $user = auth()->user();
        $children = null;
        if($user){
            if($user->role === 'ROLE_ADMIN' or $user->role === 'ROLE_TEACHER' or $user->role === 'ROLE_PARENT'){
                $children = Child::where('parent_id', $user->id)->get();
                return view('user.payment', compact('children', ));
            }
            return view('user.payment');
        }
        return view('user.payment');
    }
}
