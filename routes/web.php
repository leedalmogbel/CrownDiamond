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
    if(Auth::check()) {
        return redirect('/dashboard');
    } else {
        return view('/admin/login');
    }
});


// Route::get('/dashboard', function () {
//     return view('dashboard.dashboard');
// });

Route::get('/dashboard', 'DashboardController@dashboard');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
