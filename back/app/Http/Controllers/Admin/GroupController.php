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
        $data = $request->validate([
            'name'=>'required|string',
            'limit'=>'required',
            'description'=>'required|string',
            'image'=>''
        ]);
        $image = Storage::disk('public')->put('groupImages', $data['image']);
        $image = "storage/".$image;

        $group = Group::create([
            'name' => $data['name'],
            'limit' => $data['limit'],
            'description' => $data['description'],
            'image' => $image
        ]);

        return response()->json($group);

    }

     public function show(Group $group){
        return view('admin.group.show', compact('group'));
     }

     public function edit(Group $group){
        return view('admin.group.edit',compact('group'));
     }

     public function update(UpdateGroupRequest $request, Group $group){
         $data = $request->validated();
         DB::beginTransaction();
         if(array_key_exists('image', $data)){
             $image = Storage::disk('public')->put('groupImages', $data['image']);
             $image = "storage/".$image;
            $group->update([
                'name' => $data['name'],
                'limit' => $data['limit'],
                'description' => $data['description'],
                'image' => $data['image'],

            ]);
         }
         else {
             $group->update([
                 'name' => $data['name'],
                 'limit' => $data['limit'],
                 'description' => $data['description'],

             ]);
         }
         DB::commit();
         return redirect()->route('admin.group.index')->with('status','Group data is Updated');
     }

     public function delete(Group $group){
         $group->delete();
        return redirect()->route('admin.group.index')->with('status', 'Group is deleted');
     }
}
