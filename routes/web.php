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

Route::get('/aboutdepartment', function () {
    return view('aboutdepartment');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/activities', function () {
    return view('activities');
});

Route::get('/associationdept', function () {
    return view('associationdept');
});

Route::get('/faculty', function () {
    return view('faculty');
});

Route::get('/galary', function () {
    return view('galary');
});

Route::get('/placementdept', function () {
    return view('placementdept');
});

Route::get('/student', function () {
    return view('student');
});


