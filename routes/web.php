<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;
use  App\Http\Controllers;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/login', "App\Http\Controllers\LoginContrller@loginView");
Route::post('/login',"App\Http\Controllers\LoginContrller@getData" );
//Route::get('/', "App\Http\Controllers\LoginContrller@loginView");
// Route::get('/', function () {

//     echo "Test request";
//     //return view('welcome');
// });


// Route::get('/login', ['uses'=> 'LoginController@index']);
//Route::get('/login', [LoginController::class,'index']); for v8
// Route::post('/login', 'LoginController@verify');

// Route::get('/register', function(){
// 	echo "this is signup page";
// });

// Route::post('/register', function(){
// 	echo "this is signup page";
// });

//Route::get('/home', 'App\Http\Controllers\LoginContrller@index');
// Route::get('/', 'LoginContrller@loginView');

// Route::get('/user/create', 'App\Http\Controllers\UserController@create');
// Route::post('/user/create', 'App\Http\Controllers\UserController@createData');
// Route::get('/user/list', 'App\Http\Controllers\UserController@list');

// Route::get('/user/details/{id}', 'App\Http\Controllers\UserController@details');
// Route::get('/user/edit/{id}', 'App\Http\Controllers\UserController@edit');
// Route::post('/user/edit/{id}', 'UserController@update');
// Route::get('/user/delete/{id}', 'UserController@delete');
// Route::post('/user/delete/{id}', 'App\Http\Controllers\UserController@destroy');
// Route::group(['middleware'=>['sess']], function(){

//     Route::get('/home', ['as'=>'home.index','uses'=>'LoginContrller@index'])->middleware('sess');
//     //Route::get('/home', 'HomeController@index')->name('home.index');

//     Route::get('/user/list', 'UserController@list');
//     Route::get('/user/details/{id}', 'UserController@details');

//     Route::get('/user/create', 'UserController@create')->name('user.create');
//     Route::post('/user/create', 'UserController@insert')->name('user.insert');
//     Route::get('/user/edit/{id}', 'UserController@edit');
//     Route::post('/user/edit/{id}', 'UserController@update');
//     Route::get('/user/delete/{id}', 'UserController@delete');
//     Route::post('/user/delete/{id}', 'UserController@destroy');
// });

Route::resource('/', 'ProductController');