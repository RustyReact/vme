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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::post("/register","MainController@register");
Route::post("/login","MainController@login");

Route::get('/contact',function(){
    return view("contact");
});

// Camera
Route::get("/single",function(){
    return view("/camera/single");
});
Route::get("/multi",function(){
    return view("/camera/multi");
});
Route::get("/sing",function(){
    return view("/camera/camera");
});
Route::get("/single-ji",function(){
    return view("/camera/camera-ji");
});
Route::post("/authenticate","MainController@authenticate");
// END OF CAMERA