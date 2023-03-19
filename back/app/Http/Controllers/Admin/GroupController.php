<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateGroupRequest;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class GroupController extends Controller
{
    public function index(){
        $groups = Group::all();
        return view('admin.group.index', compact('groups'));
    }

    public function create(Request $request){
        $group = Group::create([
            'name' => $request->name,
            'limit' => $request->limit,
            'description' => $request->description,
            'image' => $request->image
        ]);

        return response($request);

    }

     public function show(Group $group){
        return view('admin.group.show', compact('group'));
     }

     public function edit(Group $group){
        return view('admin.group.edit',compact('group'));
     }

     public function update(UpdateGroupRequest $request, Group $group){
         $data = $request->validated();
         $image = null;
         if(array_key_exists('passport_front',$data)){
             $image = Storage::disk('public')->put('passports', $data['image']);
             $image = "storage/".$image;
         }
         DB::beginTransaction();
         $group->update([
             'name' => $data['name'],
             'limit' => $data['limit'],
             'description' => $data['description'],
             'image' => $image,

         ]);
         DB::commit();
         $image = null;
         if(array_key_exists('passport_front',$data)){
             $image = Storage::disk('public')->put('group_images', $data['image']);
             $image = "storage/".$image;
         return redirect()->route('admin.group.index')->with('status','Group data is Updated');
     }
}
}
