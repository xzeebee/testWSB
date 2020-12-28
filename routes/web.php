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

Route::get('tests', [App\Http\Controllers\testController::class, 'index']);

Route::get('students/edit/{id}', [App\Http\Controllers\StudentController::class, 'edit']);

Route::get('students/create', [App\Http\Controllers\StudentController::class, 'create']);

Route::get('students/', [App\Http\Controllers\StudentController::class, 'index']);

Route::get('students/{id}', [App\Http\Controllers\StudentController::class, 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::get('testCon/', [App\Http\Controllers\testController::class, 'index']); // wskazujemy metodę index w kontrolerze

 
