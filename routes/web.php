<?php

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

Auth::routes();


/*
Route::get('/createAccount', function () {
    return view('createAccount');
});
*/
Route::get('/update', function () {
    return view('update');
});
Route::get('/create', function () {
    return view('create');
});*/



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user', 'UsersController');

	
Route::any('destroy/{id}', 'UsersController@destroy');
Route::any('update/{id}', 'UsersController@update');
Route::any('update_to_database/{id}', 'UsersController@update_to_database');
Route::any('search', 'UsersController@search');

Route::get('/check-model','operationController@getIndex');
Route::any('operationShow/{operation_id}','operationController@operationShow');

Route::any('manager', 'UsersController@manager');
Route::any('doctor', 'UsersController@doctor');

Route::group(['prefix' => 'admin', 'middleware' => array('auth','admin'), 'namespace' => 'Admin'], function (){
    Route::get('/', function()
    {
        return View('admin.dashboard');
    });
    
});
Route::resource('user','UsersController@index');

Route::get('/home2', 'HomeController@destroy');
Route::resource('user','UsersController');

