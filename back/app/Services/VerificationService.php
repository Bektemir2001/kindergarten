<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VerificationService
{
    public function verification(Request $request):Response
    {
        try {
            DB::beginTransaction();

            $data = $request->validate([
                'user' => ''
            ]);
            $user = User::where('id', $data['user'])->get();
            $user = $user[0];
            $user->update([
                'email_verified_at' => Carbon::now()
            ]);
            session()->forget('code');
            DB::commit();
            return response(['message' => 'verification success'])->header("Access-Control-Allow-Origin", config('cors.allowed_origins'))
                ->header("Access-Control-Allow-Methods", config('cors.allowed_methods'));
        }
        catch (\Exception $e){
            DB::rollBack();
            return response(['message' => 'some thing wrong'])->header("Access-Control-Allow-Origin", config('cors.allowed_origins'))
                ->header("Access-Control-Allow-Methods", config('cors.allowed_methods'));
        }
    }
}
