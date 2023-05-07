<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Child;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{
     public function index(){
         $children = DB::table('groups')
             ->leftJoin('children', 'children.group_id', '=', 'groups.id')
             ->leftJoin('users', 'users.id', '=', 'children.parent_id')
             ->where('groups.teacher_id', auth()->user()->id)
             ->select('children.id', 'children.name', 'children.surname', 'children.birth_date',
             'children.gender', 'users.name as parent_name', 'users.surname as parent_surname')
             ->get();
         return view('employee.group.index', compact('children'));
     }

     public function show(){
         $children = DB::table('groups')
             ->leftJoin('children', 'children.group_id', '=', 'groups.id')
             ->leftJoin('users', 'users.id', '=', 'children.parent_id')
             ->where('groups.teacher_id', auth()->user()->id)
             ->select('children.id', 'children.name', 'children.surname', 'children.birth_date',
                 'children.gender', 'users.name as parent_name', 'users.surname as parent_surname',
                'groups.name as group_name', 'children.photo')
             ->first();
         return view('employee.group.show', compact('children'));
     }


}
