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
    return view('welcome');
});

// rotta per Employees
Route::get('/emps', 'EmployeeController@index')
-> name('emps-index');

Route::get('/emps/{id}', 'EmployeeController@show')
-> name('emps-show');

Route::get('/brands', 'BrandController@index')
-> name('brands-index');

Route::get('/brands/{id}', 'BrandController@show')
-> name('brands-show');
