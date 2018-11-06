<?php
use App\User;
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

Route::get('/', 'HomeController@index')->name('home');

/*
Route::get('/createAccount', function () {
    return view('createAccount');
});

<<<<<<< HEAD

Route::get('/index', function () {
    $users = User::all()->toArray();
    return view('index' , compact('users'));
});


Route::get('/index2', function () {
    
    $users = User::all()->toArray();
    return view('index' , compact('users'));
});
=======
Route::get('/create', function () {
    return view('create');
});*/

Auth::routes();
>>>>>>> origin/laravel_hospital_krisorn


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD
Route::resource('user','UsersController@index');

Route::get('/home2', 'HomeController@destroy');
=======
Route::resource('user','UsersController');
>>>>>>> origin/laravel_hospital_krisorn
