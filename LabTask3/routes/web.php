<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
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
Route::get('/login',[usercontroller::class,'login'])->name('login');
Route::post('/login',[usercontroller::class,'loginsubmit'])->name('login.submit');
Route::get('/logout',[usercontroller::class,'logout'])->name('logout');
Route::get('/student',[usercontroller::class,'student'])->middleware('auth.user')->name('student');
Route::get('/teacher',[usercontroller::class,'teacher'])->middleware('auth.user')->name('teacher');
Route::get('/admin',[usercontroller::class,'admin'])->middleware('auth.user')->name('admin');