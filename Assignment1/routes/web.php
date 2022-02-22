<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\customercontroller;

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

Route::get('/product/view',[productcontroller::class,'product'])->name('product');
Route::get('/product/details/{id}',[productcontroller::class,'productdetails'])->name('productdetails');
Route::get('/product/create',[productcontroller::class,'createproduct'])->name('createproduct');
Route::get('/product/delete',[productcontroller::class,'deleteproduct'])->name('deleteproduct');
Route::get('/product/update',[productcontroller::class,'updateproduct'])->name('updateproduct');
Route::post('/product/create',[productcontroller::class,'createsubmit'])->name('create.submit');
Route::post('/product/delete',[productcontroller::class,'deletesubmit'])->name('delete.submit');
Route::post('/product/update',[productcontroller::class,'updatesubmit'])->name('update.submit');

Route::get('/login',[customercontroller::class,'login'])->name('login');
Route::post('/login',[customercontroller::class,'loginsubmit'])->name('login.submit');
Route::get('/customer/order',[customercontroller::class,'order'])->name('customer.order');
Route::post('/customer/order',[customercontroller::class,'AddToChart'])->name('order.submit');
Route::get('/logout',[customercontroller::class,'logout'])->name('logout');


