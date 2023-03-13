<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;
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
        $user->update($data);
        $notification = 'Изменено';
        return redirect()->route('admin.user.index')->with(['notification' => $notification]);
    }

    public function delete(User $user){
        $user->delete();
        $notification = 'Удалено';
        return redirect()->route('admin.user.index')->with(['notification' => $notification]);
    }
}
