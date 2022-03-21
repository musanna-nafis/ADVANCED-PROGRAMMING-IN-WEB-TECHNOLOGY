<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\departmentAPICourse;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/depatrtment/all',[departmentAPICourse::class,'departmentAll']);
Route::post('/department/add',[departmentAPICourse::class,'departmentAdd']);
Route::post('/department/update',[departmentAPICourse::class,'departmentUpdate']);
Route::post('/department/delete',[departmentAPICourse::class,'departmentDelete']);
Route::get('/department/{id}',[departmentAPICourse::class,'get']);


Route::get('/course/all',[departmentAPICourse::class,'courseAll']);
Route::post('/course/add',[departmentAPICourse::class,'courseAdd']);
Route::post('/course/update',[departmentAPICourse::class,'courseUpdate']);
Route::post('/course/delete',[departmentAPICourse::class,'courseDelete']);

