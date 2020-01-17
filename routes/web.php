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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route:: get ('/test', function () {
    return view('dashboard');
})->name('test');

Route:: get ('/season', function () {
    return view('season_detail');
})->name('season');

Route:: get ('/assign_empl', function () {
    return view('assign_employee');
})->name('assign_empl');

Route:: get ('/employee_Unpaid', function () {
    return view('employee_Unpaid_Salary');
})->name('employee_Unpaid');

Route:: get ('/employee_Paid', function () {
    return view('employee_Paid_Salary');
})->name('employee_Paid');

Route:: get ('/product_avail', function () {
    return view('product_availability');
})->name('product_avail');
