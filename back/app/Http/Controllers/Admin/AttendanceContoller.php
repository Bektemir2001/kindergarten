<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Child;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;

class AttendanceContoller extends Controller
{
    public function index(){
        $groups = Group::all();
        return view('admin.attendance.index', compact( 'groups'));
    }
}
