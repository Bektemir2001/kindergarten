<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Http\Requests\UpdateGroupRequest;
use App\Models\Gallery;
use App\Models\Group;
use App\Services\Admin\GalleryService;
use App\Services\Admin\UserService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class GroupController extends Controller
{
    private GalleryService $galleryService;

    public function __construct()
    {
        $this->galleryService = new GalleryService();
    }
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
                'image' => $image,

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

    public function Gallery(Group $group){
        if(!$group) abort(404);
        $galleries = $group->gallery;
        return view('admin.group.addGallery',compact('group', 'galleries'));
    }

    public function galleryCreate(Request $request, Group $group)
    {
        $res = $this->galleryService->store($request, $group);

        return redirect()->back();
    }
}
