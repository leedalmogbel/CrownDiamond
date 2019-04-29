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

Route::get('/', function () {
    return Voyager::view('voyager::login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard.dashboard');
// });

Route::get('/dashboard', 'DashboardController@dashboard');

Route::get('/dashboard/edit', 'DashboardController@edit');


Route::get('/dashboard/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
