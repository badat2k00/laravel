<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DegreeController;
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

Route::controller(EmployeeController::class)->group(function(){
    Route::get('employee','index');
    Route::get('employee/create','create');
    Route::post('employee','store');
    Route::get('employee/{employee_id}/delete','destroy');
    });
    
    Route::controller(DegreeController::class)->group(function(){
    Route::get('degrees','index');
    Route::get('degrees/create','create');
    Route::post('degrees','store');
    Route::get('degrees/{degree}/edit','edit');
    Route::put('degrees/{degree}','update');
    Route::get('degrees/{degree_id}/delete','destroy');
    });
    