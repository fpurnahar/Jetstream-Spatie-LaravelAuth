<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\LoginResponse;
use App\Http\Controllers\SuperAdmin;
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
Route::get('/profile', function () {
    return view('admin.profileInformation');
});

Route::Group(['middleware' => 'auth'], function () {
    Route::get('/redirect', [LoginResponse::class, 'index'])->name('redirect');
    Route::get('/super_admin', [SuperAdmin::class, 'index'])->middleware('superAdmin')->name('superAdmin');
    Route::get('/admin', [Admin::class, 'index'])->middleware('admin')->name('admin');
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        });
    });
});
