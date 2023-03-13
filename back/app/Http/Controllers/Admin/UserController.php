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

    public function create(){

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
        return redirect()->route('admin.user.index')->with('status','Data is Updated');
    }

    public function delete(User $user){
        $user->delete();
        return redirect()->route('admin.user.index')->with('status','User is deleted');
    }
}
