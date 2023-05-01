<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index(){
        $resumes = Resume::all();
        return view('admin.resume.index', compact('resumes'));
    }

    public function show(Resume $resume){
        return view('admin.resume.show', compact('resume'));
    }

    public function delete(Resume $resume){
        $resume->delete();
        return redirect()->route('admin.resume.index')->with('status', 'The resume was deleted');
    }
}
