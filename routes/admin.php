<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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


//prefix  admin

Route::group(['middleware'=>'guest:admin'],function (){
    Route::get('/login',[AdminController::class,'login']);
    Route::post('/login',[AdminController::class,'logged'])->name('admin.login');
});

Route::group(['middleware'=>'auth:admin'],function (){
    Route::get('default',[AdminController::class,'dash'])->name('dash');
    Route::get('/',function (){
        return "Admin logined";
    });
});




//Route::view('test','index')->middleware('auth:admin');


