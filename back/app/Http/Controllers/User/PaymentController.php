<?php


namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Child;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function index(Request $request){
        $data = $request->validate([
            'child_id' => 'required',
            'date_from' => 'required',
            'date_to' => 'required',
        ]);

        $date_from = Carbon::createFromFormat('Y-m-d', $data['date_from']);
        $date_to = Carbon::createFromFormat('Y-m-d', $data['date_to']);
        $daysExcludingSunday = $date_from->diffInDaysFiltered(function ($date) {
            return $date->dayOfWeek !== Carbon::SUNDAY;
        }, $date_to);
        $payment_amount = $daysExcludingSunday * 250;
        $child = DB::table('children')
            ->leftJoin('groups', 'groups.id', '=', 'children.group_id')
            ->leftJoin('users', 'users.id', '=', 'groups.teacher_id')
            ->where('children.id', $data['child_id'])
            ->select('children.name', 'children.surname', 'groups.name as group_name')
            ->get();
        $user = auth()->user();
        if($user){
            if($user->role === 'ROLE_ADMIN' or $user->role === 'ROLE_TEACHER' or $user->role === 'ROLE_PARENT'){
                $children = Child::where('parent_id', $user->id)->get();
                return view('user.payment', compact('children', 'data', 'payment_amount', 'child'));
            }
            return view('user.payment',compact('data', 'payment_amount', 'child'));
        }
        return view('user.payment', compact('data', 'payment_amount', 'child'));
    }
}
