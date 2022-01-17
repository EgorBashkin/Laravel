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
            <a href="/contacts">Contacts</a>
    <p>Main page</p>';
});

Route::get('/info', function () {
    return ' <a href="/test">Return</a>
    <p>info</p>';
});

Route::get('/contacts', function () {
    return ' <a href="/test">Return</a>
    <p>Contacts</p>';
});

