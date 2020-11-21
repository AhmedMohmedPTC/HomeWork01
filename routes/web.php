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

Route::get('about-me', function () {
    $name = "Ahmed Mohmed";
    $age = 22;


    return view('about',compact('name','age'));
});
route::post('send', function(Request $request){
    $name = $request->mtname;
    $age = $request->myage;
    return view('about', compact('name','age'));

});
