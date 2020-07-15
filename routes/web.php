<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('khoahoc',function(){
    return 'Xin chào các bạn';
});
Route::get('khoahoc/xinchao',function(){
    echo '<h1>Nguyễn Phước Tấn</h1>';
});
//Truyền tham số trong route
Route::get('khoahoc/{ten}',function($ten){
    return 'Xin chào '.$ten;
});
//Chuyền điều kiện cho route
Route::get('laravel/{ngay}',function($ngay){
    return 'Xin chào '.$ngay;
})->where(['ngay' => '[a-zA-Z]+']);
//định danh và nhóm route
Route::get('route1',['as' => 'myRoute',function(){
    echo 'Xin chào các bạn';
}]);
//Đặt định danh cho route1
Route::get('goiRoute1',function(){
    return redirect()->Route('myRoute');
});
//Group Route
Route::group(['prefix' => 'myGroup'],function(){
    Route::get('user1',function(){
        echo 'user1';
    });
    Route::get('user2',function(){
        echo 'user2';
    });
    Route::get('user3',function(){
        echo 'user3';
    });
});
//Gọi controller
Route::get('goiController','MyController@xinchao');