<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OrderController;





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

Route::get('/',[dashboardController::class, 'index']);
Route::get('/event',[dashboardController::class, 'event']);

Route::get('/customerdata',[dashboardController::class, 'customerdata']);
Route::post('/store_client_data',[clientController::class, 'store_client_data']);
Route::get('/serach_client',[clientController::class, 'search_client']);



Route::get('/delete_client/{id}',[clientController::class, 'delete_client']);
Route::get('/update_client_data/{id}',[clientController::class, 'update_client_data']);
Route::post('/store_update_client_data/{id}',[clientController::class, 'store_update_client_data']);


Route::get('/employee_data',[dashboardController::class, 'employee']);
Route::post('/store_employee_data',[EmployeeController::class, 'store_employee_data']);

Route::get('/delete_employee/{id}',[EmployeeController::class, 'delete_employee']);
Route::get('/update_employee_data/{id}',[EmployeeController::class, 'update_employee_data']);
Route::post('/store_update_employee_data/{id}',[EmployeeController::class, 'store_update_employee_data']);
Route::get('/serach_employee',[EmployeeController::class, 'search_employee']);


Route::post('/store_order_data',[OrderController::class, 'store_order_data']);
Route::get('/open_update_menu/{id}',[OrderController::class, 'open_update_menu']);
Route::get('/update_Order_data/{id}',[OrderController::class, 'update_Order_data']);
Route::post('/store_update_Order_data/{id}',[OrderController::class, 'store_update_Order_data']);
Route::get('/delete_Order_data/{id}',[OrderController::class, 'delete_Order_data']);






Route::post('/update_status_1/{id}',[OrderController::class, 'update_status_1']);
Route::post('/update_status_2/{id}',[OrderController::class, 'update_status_2']);
Route::post('/update_status_89/{id}',[OrderController::class, 'update_status_89']);
Route::post('/update_status_10/{id}',[OrderController::class, 'update_status_10']);
Route::post('/update_status_11/{id}',[OrderController::class, 'update_status_11']);
Route::post('/update_status_12/{id}',[OrderController::class, 'update_status_12']);
Route::post('/update_status_3/{id}',[OrderController::class, 'update_status_3']);
Route::post('/update_status_4/{id}',[OrderController::class, 'update_status_4']);
Route::post('/update_status_5/{id}',[OrderController::class, 'update_status_5']);
Route::post('/update_status_6/{id}',[OrderController::class, 'update_status_6']);
Route::post('/update_status_7/{id}',[OrderController::class, 'update_status_7']);























