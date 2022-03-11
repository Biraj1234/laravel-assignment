<?php

// use App\Http\Controllers\System\CategoryController;
// use App\Http\Controllers\System\ProductController;
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

//Assignment 1 starts

Route::group(['namespace' => 'System', 'middleware' => 'test'], function () {
    Route::get('/user/{name}', 'UserController@show');
});

Route::group(['prefix' => 'product/', 'namespace' => 'System', 'name' => 'category.'], function () {
    Route::resource('category', 'CategoryController');
});

//Assignment 1 ends


//Assignment 2 starts
Route::group(['namespace' => 'System'], function () {
    Route::resources([
        'customer' => 'CustomerController',
        'city' => 'CityController',
    ]);
});
//Assignment 2 ends
