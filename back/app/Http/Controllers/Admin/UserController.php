<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function index(){
        $users = User::all();
        return view('admin.user.index', compact('users'));

    }

    public function edit(User $user){
        return view('admin.user.edit', compact('user'));
    }

    public function create(Request $request){
        $data = $request->validate([
            'name'=>'required|string',
            'surname'=>'required|string',
            'address'=>'required',
            'phone_number'=>'required',
            'email'=>'required|email|max:255|unique:users,email,',
            'password'=>'required',
            'role'=>'',
            'passport_front'=>'',
            'passport_back'=>''
        ]);
        $passport_front = null;
        $passport_back = null;
        if($request->hasFile('passport_front')){
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
            'role' => $data['role'],
            'passport_front'=>$passport_front,
            'passport_back'=>$passport_back
        ]);
        return response($user);

    }

    public function show(User $user){
        return view('admin.user.show',compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user){
        $data = $request->validated();
        $passport_front = null;
        $passport_back = null;
        DB::beginTransaction();
        if($request->hasFile('passport_front')){
            $passport_front = Storage::disk('public')->put('passports', $request['passport_front']);
            $passport_front = "storage/".$passport_front;
        }
        if($request->hasFile('passport_back')){
            $passport_back = Storage::disk('public')->put('passports',$request['passport_back']);
            $passport_back = "storage/".$passport_back;
        }
        $user->update([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'address' => $data['address'],
            'phone_number' => $data['phone_number'],
            'role' => $data['role'],
            'passport_front' => $passport_front,
            'passport_back' => $passport_back,
        ]);
        DB::commit();
        return redirect()->route('admin.user.index')->with('status','User data is Updated');
    }

    public function delete(User $user){
        $user->delete();
        return redirect()->route('admin.user.index')->with('status','User is deleted');
    }
}
