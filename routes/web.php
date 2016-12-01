<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::post('submit', function(){
	//var_dump($_POST);
});
Route::get('/home', 'HomeController@index');
Route::get('/package-list', 'HomeController@userPackage');
Route::post('/package-post', 'HomeController@getPackageData');
Route::get('/showPackage', 'HomeController@showPackage');
Route::post('/customer-post', 'HomeController@getCustomerData');
Route::get('/Customer-form', 'HomeController@customerForm');
Route::get('/Show-Customer', 'HomeController@showCustomer');
Route::get('/Laravel-Form', 'HomeController@laravelForm');
Route::get('/edit-package-data/{packageId}', 'HomeController@editPackageData');
Route::get('/delete-package/{packageId}', 'HomeController@deletePackage');
Route::get('/edit-customer-data/{customerId}', 'HomeController@editCustomerData');
Route::get('/delete-customer/{customerId}', 'HomeController@deleteCustomer');
Route::get('/Bill-form', 'HomeController@bill');
Route::get('/Search-bill-by-Customer','HomeController@searchBillByCustomer');
Route::get('/Search-By-Month','HomeController@SearchByMonth');




