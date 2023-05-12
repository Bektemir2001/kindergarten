<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    public function index(){
        $children = DB::table('groups')
            ->leftJoin('children', 'children.group_id', '=', 'groups.id')
            ->leftJoin('users', 'users.id', '=', 'children.parent_id')
            ->where('groups.teacher_id', auth()->user()->id)
            ->select('children.id', 'children.name', 'children.surname', 'children.birth_date',
                'children.gender', 'users.name as parent_name', 'users.surname as parent_surname')
            ->get();
        return view('employee.attendance.index', compact('children'));
    }
}
