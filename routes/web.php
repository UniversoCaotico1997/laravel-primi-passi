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
    return view('nav');
});

Route::get('/home', function () {
    return view('home', ['name' => 'Roberto']);
});

Route::get('/menu', function () {
    return view('menu', ['lastname' => 'Loria']);
});

Route::get('/info', function () {
    return view('info', ['age' => '25']);
});

Route::get('/faq', function () {
    return view('faq', ['country' => 'Italy']);
});

Route::get('/social', function () {
    return view('social', ['name' => 'Roberto']);
});
