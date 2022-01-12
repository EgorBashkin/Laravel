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

Route::get('/test', function () {
    return ' <a href="/info">Info</a>
    <p>Page #1</p>';
});

Route::get('/info', function () {
    return ' <a href="/test">Return</a>
    <p>Page #2</p>';
});
