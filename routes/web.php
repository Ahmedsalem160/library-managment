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


//Route::view('/reset','admin.auth.resetPassword');




//Hany
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('loginStudent', function () {
    return view('students.login');
})->name('loginStudent');

Route::get('registerStudent', function () {
    return view('students.register');
})->name('registerStudent');


//default
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
<<<<<<< HEAD
Route::resource('books', App\Http\Controllers\BookController::class);
Route::resource('stdbooks', App\Http\Controllers\StdBookController::class);
Route::get('showAll',[App\Http\Controllers\BookController::class, 'showAll'])->name("show_all");
Route::get('showAllBook',[App\Http\Controllers\StdBookController::class, 'showAll'])->name("show_book");
=======

//Hany

Route::get('books.showall',[App\Http\Controllers\BookController::class, 'showall'])->name("show_all");
>>>>>>> m2


