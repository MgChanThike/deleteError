<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

Route::group(['prefix'=>'customer'],function()
{
    Route::get('register',[CustomerController::class,'register'])->name('customer#register');
    Route::post('create',[CustomerController::class,'create'])->name('customer#create');

    Route::get('list',[CustomerController::class,'list'])->name('customer#list');
    Route::get('seeMore/{id}',[CustomerController::class,'seeMore'])->name('customer#seeMore');

    Route::get('delete/{id}',[CustomerController::class,'delete'])->name('customer#delete');
});
