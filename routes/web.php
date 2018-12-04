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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::post('/add_mfg','MfgController@add_Manufacturer');
Route::post('/add_model','ModelController@add_Model');

Route::get('/get_mfg','MfgController@get_Manufacturers');

Route::get('/get_cars','CarController@get_Cars');


Route::post('/add_qty','CarController@add_Qty');

Route::post('/view_inventory',function(){
	return App\Http\Controllers\CarController::view_Inventory();
});

Route::post('/sold_model','CarController@sold_Model');


Route::get('/add-mfg-page',function(){
	return view('add-mfg');
});

Route::get('/add-model-page',function(){
	return view('add-model');
});

Route::get('/add-stock-page',function(){
	return view('add-stock');
});

Route::get('/show-inventory-page',function(){
	return view('index');
});





