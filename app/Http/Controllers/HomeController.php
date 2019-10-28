<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Calendar;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::where('u_type', '2')->get();
        return view('select_staff', ['staffs' => $users ]);
    }

    public function selectws(Request $request, User $staffs)
    {
        $staffs = User::where('id', $request->staff_id)->find($request->staff_id);
        // $now = new Carbon();
        // echo ($now);

        //カレンダー情報取得
        $cal = new Calendar();
        $tag = $cal->showCalendarTag($request->month, $request->year);
   
        // return view('work_shift', compact('tag'));
        return view('work_shift', ['staffs' => $staffs, 'tag' => $tag]);
    }
}
