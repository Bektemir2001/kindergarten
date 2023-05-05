<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UpdateChildrenRequest;
use App\Models\Child;
use App\Models\Enroll;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EnrollController
{
    public function index(){
        $enrolls = Enroll::all();
        return view('admin.enroll.index', compact('enrolls'));
    }

    public function show(Enroll $enroll){
        $groups = Group::all();
        return view('admin.enroll.show', compact('enroll', 'groups'));
    }

    public function approve(Request $request, Enroll $enroll){
        Child::create([
            'name'=>$enroll['name'],
            'surname' => $enroll['surname'],
            'birth_date' => $enroll['birth_date'],
            'gender' => $enroll['gender'],
            'parent_id' => $enroll['parent_id'],
            'group_id'=>$request->groupId,
            'photo' => $enroll['photo'],
            'birth_certificate' => $enroll['birth_certificate'],
            'med_certificate' => $enroll['med_certificate'],
            'med_disability' => $enroll['med_disability'],
        ]);

        DB::beginTransaction();
        $parent = User::where('id', $enroll['parent_id'])->get();
        $parent = $parent[0];
        $parent->update([
            'role'=>"ROLE_PARENT"
        ]);
        DB::commit();
        $enroll->delete();
        return redirect()->route('admin.enroll.index')->with('status', 'Enrolling was approved.');
    }



    public function delete(Enroll $enroll){
        $enroll->delete();
        return redirect()->route('admin.enroll.index')->with('status', 'Enrolling was denied.');
    }
}
