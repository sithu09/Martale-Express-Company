<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('home');
// }); //Home

Route::get('/home', function () {
    return view('Backend.admin');
}); //Admin

// Project
Route::get('/order', 'YangonMandalayController@index');
Route::get('/', 'MandalayController@index');

Auth::routes();

//Need Middleware
Route::get('news', function () {
    return view('Backend.news');
});
Route::get('time', function () {
    return view('Backend.time');
});
// Route::group(['prefix' => 'home'], function () {


// });

// Route::get('/home', 'HomeController@index')->name('home');


Route::post('/NEWS', 'NewsInsertController@store');


Route::get('/A8', function () {
    return view('T.A8');
});
