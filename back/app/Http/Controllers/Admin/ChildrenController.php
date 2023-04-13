<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateChildrenRequest;
use App\Models\Child;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ChildrenController extends Controller
{
    public function index(){
        $children = Child::all();
        return view('admin.children.index', compact('children'));
    }

    public function create(Request $request){
        $data = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'birth_date' => 'required',
            'parent_id' => 'required',
            'group_id' => 'required',
            'photo' => '',
            'birth_certificate' => '',
            'med_certificate' => '',
            'payment' => 'required'
        ]);

        $photo = Storage::disk('public')->put('childImages/photos', $data['photo']);
        $photo = "storage/".$photo;
        $birth_cert = Storage::disk('public')->put('childImages/birthCertificates', $data['birth_certificate']);
        $birth_cert = "storage/".$birth_cert;
        $med_cert = Storage::disk('public')->put('childImages/medCertificates', $data['med_certificate']);
        $med_cert = "storage/".$med_cert;

        $child = Child::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'birth_date' => $data['birth_date'],
            'parent_id' => $data['parent_id'],
            'group_id' => $data['group_id'],
            'photo' => $photo,
            'birth_certificate' => $birth_cert,
            'med_certificate' => $med_cert,
            'payment' => $data['payment']
        ]);

        return response($child);
    }

    public function edit(Child $child){
        return view('admin.children.edit', compact('child'));
    }

    public function show(Child $child){
        return view('admin.children.show', compact('child'));
    }

    public function update(UpdateChildrenRequest $request, Child $child){
        $data = $request->validated();
        DB::beginTransaction();
        $photo = $child->photo;
        $birth_certificate = $child->birth_certificate;
        $med_certificate = $child->med_certificate;
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
        $child->update([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'birth_date' => $data['birth_date'],
            'parent_id' => $data['parent_id'],
            'group_id' => $data['group_id'],
            'photo' => $photo,
            'birth_certificate' => $birth_certificate,
            'med_certificate' => $med_certificate,
            'payment' => $data['payment']
        ]);
        DB::commit();
        return redirect()->route('admin.children.index')->with('status','Child data is Updated');
    }

    public function delete(Child $child){
        $child->delete();
        return redirect()->route('admin.children.index')->with('status','Child is deleted');
    }
}
