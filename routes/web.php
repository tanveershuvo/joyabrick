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


	Route:: get ('/home', function () {
	    return view('dashboard');
	})->name('test');


	Route:: get ('/season', function () {
		return view('season_detail');
	})->name('season');

	// Add Employee page Routes section
	Route::group(['middleware' => 'auth'], function(){
	Route:: get ('/employee_details', function () {
		  return view('assign_employee');
	  })->name('employee');
		Route::resource('addemployee','EmployeeDetailController');
		Route::get('addemployee/{id}/destroy', 'EmployeeDetailController@destroy');
		Route:: get ('/employee_Unpaid', function () {
			return view('employee_Unpaid_Salary');
		})->name('employee_Unpaid');

		Route:: get ('/employee_Paid', function () {
			return view('employee_Paid_Salary');
		})->name('employee_Paid');
	 });


	// Add Product page Routes section
	Route::group(['middleware' => 'auth'], function(){

		Route:: get ('/product_avail', function () { return view('product_availability');});
		Route::post('addproduct', 'ProductDetailsControlller@store')->name('addproduct');
		Route::get('/showAllProduct', ['as' => 'showAllProduct', 'uses'=>'ProductDetailsControlller@index']);

		Route::get('/updateProduct/{id}', ['as' => 'updateProduct/{id}', 'uses'=>'ProductDetailsControlller@edit']);
		Route::get('/deleteProduct/{id}', ['as' => 'deleteProduct/{id}', 'uses'=>'ProductDetailsControlller@destroy']);

	});


	//For Multi Language
	Route::get('lang/{locale}', 'HomeController@lang');
