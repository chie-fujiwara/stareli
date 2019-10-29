<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\HomeController;
use App\Reservation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as IlluminateRequest;
// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route as IlluminateRoute;

// use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/addstaff', function () {
    return view('addstaff');
});

//お気に入りスタッフ一覧表示処理
Route::get('/home', 'HomeController@index')->name('home');

//各スタッフのシフト表示ページ(来店日時の登録のみ)
// Route::get('/wshift', function () {
//     return view('work_shift');
// });
Route::post('/wshift', 'HomeController@selectws');

//お気に入りスタッフ登録処理
// Route::post('/mkconstaff', function (Request $request){

// });

//来店予約内容登録処理
Route::post('/reserve', function (Request $request) {
    //バリデーション
    $validator = Validator::make($request->all(), [
        // 'task' => 'required|max:191',
    ]);
    //バリデーション:エラー
    if ($validator->fails()) {
        return redirect('/wshift')
        ->withInput()
        ->withErrors($validator);
    }
    //来店日時の登録
    $reservation = new Reservation;
    $reservation->customer_id = Auth::user()->id;
    $reservation->staff_id = $request->staff_id;
    $reservation->rv_datetime = $request->rv_datetime;
    $reservation->rv_comment =$request->rv_comment;
    $reservation->save();

    return redirect('/thanksrv');
});

//予約完了ページ
Route::get('/thanksrv', function () {
    return view('thanksrv');
});

//顧客自身の予約一覧表示処理へ
Route::get('/history', function () {
    $reservations = Reservation::where('customer_id',Auth::user()->id)
                ->orderBy('rv_datetime', 'asc')
                ->get();
    return view('rvhistory', ['myrvs' => $reservations]);
});

//
