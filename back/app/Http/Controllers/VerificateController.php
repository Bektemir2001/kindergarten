<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\VerificationService;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VerificateController extends Controller
{
    private $service;
    public function __construct()
    {
        $this->service = new VerificationService();
    }

    public function form($user){
        return view('verification', compact('user'));
    }

    public function verification(Request $request):Response
    {
        return $this->service->verification($request);
    }
}
