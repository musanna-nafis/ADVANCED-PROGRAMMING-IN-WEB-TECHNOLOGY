<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\EmployeeController;

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


Route::get('/task/login',[PagesController::class,'Login'])->name('login');
Route::get('/task/homepage',[PagesController::class,'HomePage'])->name('homepage');
Route::get('/task/contactus',[PagesController::class,'ContactUs'])->name('contactus');
Route::get('/employee/student',[EmployeeController::class,'Student'])->name('student');
Route::get('/employee/teacher',[EmployeeController::class,'Teacher'])->name('teacher');