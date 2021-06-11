<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ChangePasswordController;
use App\Http\Controllers\Backend\ChangePassword;
use App\Http\Controllers\Backend\CountryController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users',UserController::class);
Route::post('users/{user}/change-password',[ChangePasswordController::class,'change_password'])->name('users.change.password');
Route::resource('countries',CountryController::class);