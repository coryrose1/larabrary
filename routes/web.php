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

Route::view('/', 'welcome')->name('home');
Route::view('/imprint', 'imprint')->name('imprint');

Route::middleware('guest')->group(function () {
    Route::view('login', 'auth.login')->name('login');
    Route::view('register', 'auth.register')->name('register');
});

Route::view('password/reset', 'auth.passwords.email')->name('password.request');
Route::get('password/reset/{token}', 'Auth\PasswordResetController')->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::view('email/verify', 'auth.verify')->middleware('throttle:6,1')->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', 'Auth\EmailVerificationController')->middleware('signed')->name('verification.verify');

    Route::post('logout', 'Auth\LogoutController')->name('logout');

    Route::view('password/confirm', 'auth.passwords.confirm')->name('password.confirm');
});

Route::prefix('courses')->group(function (){
   Route::view('/', 'courses.index')->name('courses');
    Route::get('/{course:slug}', 'CoursesController@show')->name('courses.show');
});

Route::prefix('authors')->group(function (){
    //
});

Route::prefix('categories')->group(function (){
    //
});
