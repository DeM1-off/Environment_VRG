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

Auth::routes();


Route::get('read',[App\Http\Controllers\BookController::class, 'index'])->name('read');
Route::post('read',[App\Http\Controllers\BookController::class, 'store'])->name('read.store');
Route::get('read/{id}/edit',[App\Http\Controllers\BookController::class, 'edit'])->name('read.edit');
Route::post('read/update', [App\Http\Controllers\BookController::class, 'update'])->name('read.update');
Route::get('read/{id}/delete',[App\Http\Controllers\BookController::class, 'destroy'])->name('read.destroy');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
