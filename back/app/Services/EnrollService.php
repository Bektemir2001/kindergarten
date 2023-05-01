<?php

namespace App\Services;

use App\Models\Enroll;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class EnrollService
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'birth_date' => 'required',
            'photo' => '',
            'birth_certificate' => '',
            'med_certificate' => '',
        ]);

        $photo = Storage::disk('public')->put('enrollImages/photos', $data['photo']);
        $photo = "storage/".$photo;
        $birth_cert = Storage::disk('public')->put('enrollImages/birthCertificates', $data['birth_certificate']);
        $birth_cert = "storage/".$birth_cert;
        $med_cert = Storage::disk('public')->put('enrollImages/medCertificates', $data['med_certificate']);
        $med_cert = "storage/".$med_cert;

        $enroll = Enroll::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'birth_date' => $data['birth_date'],
            'parent_id' => auth()->user()->id,
            'photo' => $photo,
            'birth_certificate' => $birth_cert,
            'med_certificate' => $med_cert,
        ]);
        return back()->with('msg', 'Your enroll request has been successfully sent');
    }
}
