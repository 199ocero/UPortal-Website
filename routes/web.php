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

Route::post('/validate', 'Admin\DashboardController@accountValidate');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin', 'Admin\DashboardController@adminRoles');
Route::get('/admin-edit/{id}', 'Admin\DashboardController@adminEdit');
Route::post('/admin-create', 'Admin\DashboardController@adminCreate');
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});


