<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\MainGallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function gallery(){
        $galleries = MainGallery::all();
        $user = auth()->user();
        $children = null;
        if($user){
           if($user->role === 'ROLE_ADMIN' or $user->role === 'ROLE_TEACHER' or $user->role === 'ROLE_PARENT'){
                $children = Child::where('parent_id', $user->id)->get();
                return view('gallery', compact('children', 'galleries'));
            }
            return view('gallery',compact('galleries'));
        }
        return view('gallery', compact('galleries'));
    }
}
