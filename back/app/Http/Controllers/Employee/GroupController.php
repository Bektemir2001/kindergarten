<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateChildrenRequest;
use App\Models\Child;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

     public function show(int $child){
         $children = DB::table('children')
             ->leftJoin('groups', 'groups.id', '=', 'children.id')
             ->leftJoin('users', 'users.id', '=', 'children.parent_id')
             ->where('children.id', $child)
             ->select('children.id', 'children.name', 'children.surname', 'children.birth_date',
                 'children.gender', 'users.name as parent_name', 'users.surname as parent_surname',
                'groups.name as group_name', 'children.photo as photo', 'children.birth_certificate',
                'children.med_certificate', 'children.med_disability')
             ->first();
         return view('employee.group.show', compact('children'));
     }

     public function edit(int $child){
         $children = DB::table('children')
             ->leftJoin('groups', 'groups.id', '=', 'children.id')
             ->leftJoin('users', 'users.id', '=', 'children.parent_id')
             ->where('children.id', $child)
             ->select('children.id', 'children.name', 'children.surname', 'children.birth_date',
                 'children.gender', 'users.id as parent_id','users.name as parent_name', 'users.surname as parent_surname',
                 'groups.name as group_name', 'children.photo as photo', 'children.birth_certificate',
                 'children.med_certificate', 'children.med_disability', 'children.parent_id', 'children.group_id')
             ->first();
         $parents = User::where('role', 'ROLE_PARENT')->get();
         return view('employee.group.edit', compact('children', 'parents'));
     }

    public function update(UpdateChildrenRequest $request, Child $child){
        $data = $request->validated();
        DB::beginTransaction();
        $photo = $child->photo;
        $birth_certificate = $child->birth_certificate;
        $med_certificate = $child->med_certificate;
        $med_disability = $child->med_disability;
        if(array_key_exists('photo', $data)){
            $image = Storage::disk('public')->put('childImages/photos', $data['photo']);
            $photo = "storage/".$image;
        }
        if(array_key_exists('birth_certificate', $data)){
            $image = Storage::disk('public')->put('childImages/birthCertificates', $data['birth_certificate']);
            $med_certificate = "storage/".$image;
        }
        if(array_key_exists('med_certificate', $data)){
            $image = Storage::disk('public')->put('childImages/medCertificates', $data['med_certificate']);
            $med_certificate = "storage/".$image;
        }
        if(array_key_exists('med_disability', $data)){
            $image = Storage::disk('public')->put('childImages/meDisabilities', $data['med_disability']);
            $med_disability = "storage/".$image;
        }
        $child->update([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'birth_date' => $data['birth_date'],
            'parent_id' => $data['parent_id'],
            'group_id' => $data['group_id'],
            'photo' => $photo,
            'birth_certificate' => $birth_certificate,
            'med_certificate' => $med_certificate,
            'med_disability' => $med_disability,
            'payment' => $data['payment']
        ]);
        DB::commit();
        return redirect()->route('employee.group.index')->with('status','Данные ребенка были обновлены.');
    }

    public function delete(Child $child){
        $child->delete();
        return redirect()->route('employee.group.index')->with('status','Данные ребенка были удалены.');
    }

}
