<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function index(){
        $galleries = DB::table('galleries')
            ->leftJoin('groups', 'groups.id', '=', 'galleries.group_id')
            ->where('groups.teacher_id', auth()->user()->id)
            ->select('galleries.id', 'galleries.image', 'galleries.video', 'galleries.info', 'galleries.created_at', 'galleries.group_id')
            ->orderBy('galleries.created_at','desc')
            ->get();
        $created_at_dates = DB::table('galleries')
            ->where('group_id', $galleries[0]->group_id)
            ->distinct()
            ->orderBy('created_at', 'desc')
            ->pluck('created_at');
        $count = [];
        $index = 0;
        foreach ($created_at_dates as $created_at_date){
            $i = 0;
            foreach ($galleries as $gallery){
                if ($created_at_date === $gallery->created_at){
                    $i++;
                }
            }
            $count[$index] = $i;
            $index++;
        }
        return view('employee.gallery.index', compact('galleries', 'created_at_dates',  'count'));
    }

}
