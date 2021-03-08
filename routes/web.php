<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternFormController;
use App\Http\Controllers\HomeController;

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


Route::view('form','form');
Route::post('form', [InternFormController::class,'addIntern']);

Route::get('/admin', function () {
    return view('admin/index');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home/detail/{id}', [App\Http\Controllers\HomeController::class, 'detail'])->name('detail');

Route::get('/reject/{id}', [App\Http\Controllers\HomeController::class, 'reject'])->name('reject');

Route::post('/AddDetail/{id}', [App\Http\Controllers\HomeController::class, 'AddDetail'])->name('AddDetail');

// Route::get('/open/{file_name}', function($file_name){

// 	$path ='/public/uploads/'.$file_name;
// 	return response()->file($path);
// });

// Auth::routes();

// Route::get('/home/{id}/detail', function($id){
// 	return view('detail', ['id'=>$id]);
// });
