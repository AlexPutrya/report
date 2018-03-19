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
//
//Route::get('/', function () {
//    return view('new_print');
//});

Route::match(['get','post'], '/', 'Report\ReportController@newPrintReport')->name('new_print_report');
Route::match(['get','post'], '/report', 'Report\ReportController@fullReport')->name('full_report');