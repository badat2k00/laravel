<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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
    return redirect('/student');
});
Route::get('/student',[StudentController::class,'get_all_student']);
Route::get('/student/edit/{id}',[StudentController::class,'get_student_by_id'])->name('student.edit');
Route::put('/student/edit/{id}',[StudentController::class,'edit'])->name('student.update');