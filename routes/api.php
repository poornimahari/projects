<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('/webhistory', 'EmployeeWebHistoryController@index')->name('webhistory');

Route::post('/createwebsearch', 'EmployeeWebHistoryController@store')->name('createwebsearch');

Route::post('/webhistorydelete', 'EmployeeWebHistoryController@webhistorydelete')->name('webhistorydelete');




Route::post('/employees', 'EmployeesController@index')->name('employees');

Route::post('/createemployees', 'EmployeesController@store')->name('createemployees');

Route::post('/employeesdelete', 'EmployeesController@employeesdelete')->name('employeesdelete');
