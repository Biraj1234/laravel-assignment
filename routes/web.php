<?php

use App\Http\Controllers\System\CategoryController;
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


Route::group(['namespace' => 'System', 'middleware' => 'test'], function () {
    Route::get('/user/{name}', 'UserController@show');
});

Route::group(['prefix' => 'product/', 'namespace' => 'System', 'name' => 'category.'], function () {
    Route::resource('category', 'CategoryController');
});
