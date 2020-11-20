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
    return view('auth.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::post('/admin-create', 'Admin\DashboardController@adminCreate');
    Route::get('/admin', 'Admin\DashboardController@adminRoles');
    Route::get('/admin-edit/{id}', 'Admin\DashboardController@adminEdit');
    Route::delete('/admin-delete/{id}', 'Admin\DashboardController@adminDelete');
    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/');
    });
});

Route::group(['middleware' => 'guest'], function () {

    // Authentication Routes...
    Route::get('/', function () {
        return view('auth.login');
    });
});


