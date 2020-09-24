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
Route::view('/index','index')->name('index');
Route::get('/', function () {
    return view('welcome');
});
Route::get('loginStudent', function () {
    return view('students.login');
})->name('loginStudent');

Route::get('registerStudent', function () {
    return view('students.register');
})->name('registerStudent');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::resource('admin', App\Http\Controllers\AdminController::class);
Route::resource('students', App\Http\Controllers\StudentController::class);
Route::resource('books', App\Http\Controllers\BookController::class);

