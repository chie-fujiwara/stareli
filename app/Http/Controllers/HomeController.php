<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Calendar;

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
        return view('select_staff');
    }

    public function selectws(Request $request)
    {
        // $now = new Carbon();
        // echo ($now);

        $cal = new Calendar();
        $tag = $cal->showCalendarTag($request->month, $request->year);

        return view('work_shift', ['cal_tag' => $tag]);
    }
}
