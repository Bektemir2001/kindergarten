<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UpdateChildrenRequest;
use App\Models\Child;
use App\Models\Enroll;
use App\Models\Group;
use Illuminate\Http\Request;


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
            'parent_id' => $enroll['parent_id'],
            'group_id'=>$request->groupId,
            'photo' => $enroll['photo'],
            'birth_certificate' => $enroll['birth_certificate'],
            'med_certificate' => $enroll['med_certificate'],
            'payment' => $enroll['payment'],
        ]);
        $enroll->delete();
        return redirect()->route('admin.enroll.index')->with('status', 'Enrolling was approved.');
    }

    public function delete(Enroll $enroll){
        $enroll->delete();
        return redirect()->route('admin.enroll.index')->with('status', 'Enrolling was denied.');
    }
}
