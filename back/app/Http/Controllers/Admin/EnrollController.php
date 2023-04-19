<?php

namespace App\Http\Controllers\Admin;

use App\Models\Enroll;

class EnrollController
{
    public function index(){
        $enroll = Enroll::all();
        return view('admin.enroll.index', compact('enroll'));
    }
}
