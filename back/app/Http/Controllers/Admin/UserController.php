<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\DB;

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
        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
            'passport_back' => "",
            'passport_front' => ""
        ]);
        return response($request);
    }

    public function show(User $user){
        return view('admin.user.show',compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user){
        $data = $request->validated();
        DB::beginTransaction();
        $user->update([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'address' => $data['address'],
            'phone_number' => $data['phone_number'],
            'role' => $data['role'],
        ]);
        DB::commit();
        return redirect()->route('admin.user.index')->with('status','User data is Updated');
    }

    public function delete(User $user){
        $user->delete();
        return redirect()->route('admin.user.index')->with('status','User is deleted');
    }
}
