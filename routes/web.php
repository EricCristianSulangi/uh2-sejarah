<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/zaman', function(){
    return view('next');
});
Route::get('/besi', function(){
    return view('next2');
});
Route::get('/perun', function(){
    return view('next3');
});
Route::get('/per', function(){
    return view('next4');
});
Route::get('/pe', function(){
    return view('next5');
});

