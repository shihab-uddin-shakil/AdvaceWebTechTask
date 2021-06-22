<?php

use App\Http\Controllers\UserController;
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
Route::get('/','AdminController@index');
Route::post('/','AdminController@verify');
Route::get('/admins', function () {
    return view('layout.main');
});
Route::get('/users','UserController@index');


Route::get('/groups', 'UserGroupsController@index');
Route::get('groups/create','UserGroupsController@create');
Route::post('groups/create','UserGroupsController@store');
Route::delete('groups/{id}','UserGroupsController@destory');

Route::resource('/users', 'UserController',['except'=>['show']]);
Route::resource('/products', 'ProductController',['except'=>['show']]);