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

use App\Reservation;
use App\User;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//各スタッフのシフト表示ページ(来店日時の登録のみ)
Route::get('/wshift', function(){
    return view('work_shift');
});

Route::post('/reserve', function (Request $request){
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
    $reservation->rv_datetime = $request->rv_datetime;
    $reservation->rv_comment =$request->rv_comment;
    $reservation->save();

    return redirect('/home');
});
