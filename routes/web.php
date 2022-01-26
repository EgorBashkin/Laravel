<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\NewsController as AdminNewsController;
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

/*
 Меню с категориями
  */

Route::get('/menu', [\App\Http\Controllers\MenuController::class, 'index'])
    ->name("news::Menu");

Route::get('/menu/{id}', [\App\Http\Controllers\MenuController::class, 'Category'])
    ->name("news::category");


//Route::get('/menu/1/{id}', [\App\Http\Controllers\NewsController::class, 'card'])
//    ->name("news::card");

//Route::get('/menu/{category}', [\App\Http\Controllers\MenuController::class, 'Category'])
   // ->name("news::Category");

/*
 Новости
  */


Route::get('/menu/1', [\App\Http\Controllers\NewsController::class, 'index'])
  ->name("news::Catalog");

Route::get('/menu/2', [\App\Http\Controllers\NewsController::class, 'index'])
    ->name("news::Catalog");

Route::get('/menu/3', [\App\Http\Controllers\NewsController::class, 'index'])
    ->name("news::Catalog");

Route::get('/menu/1/{id}', [\App\Http\Controllers\NewsController::class, 'card'])
    ->name("news::Card");

Route::get('/menu/2/{id}', [\App\Http\Controllers\NewsController::class, 'card'])
    ->name("news::Card");

Route::get('/menu/3/{id}', [\App\Http\Controllers\NewsController::class, 'card'])
    ->name("news::Card");


/*
 *
 *Админ
 * */

Route::resource('admin/category', \App\Http\Controllers\Admin\CategoryController::class);

Route::group([
    'prefix' => '/admin/news',
    'as' => 'admin::news::'
], function (){
    route::get('', [AdminNewsController::class, 'index'])
        ->name("index");
    route::get('create', [AdminNewsController::class, 'create'])
        ->name("create");
    route::get('update', [AdminNewsController::class, 'update'])
        ->name("update");
    route::get('delete', [AdminNewsController::class, 'delete'])
        ->name("delete");
});



