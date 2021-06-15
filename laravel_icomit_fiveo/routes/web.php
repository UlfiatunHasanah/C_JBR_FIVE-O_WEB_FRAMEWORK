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

Route::group(['namespace' => 'App\Http\Controllers\frontend'], function () {
    Route::resource('landing', 'LandingController');
});

Route::get('/login', [App\Http\Controllers\frontend\LandingController::class, 'login']);
Route::get('/register', [App\Http\Controllers\frontend\LandingController::class, 'register']);
Route::get('/adminweb', [App\Http\Controllers\backend\DashboardController::class, 'adminweb']);
Route::get('/adminkom', [App\Http\Controllers\backend\DashboardController::class, 'adminkom']);
Route::get('/adminkom/profile_komunitas', [App\Http\Controllers\backend\ProfileController::class, 'profile']);
Route::get('/adminkom/profile_komunitas/upload', [App\Http\Controllers\backend\UploadController::class, 'upload']);
Route::post('/adminkom/profile_komunitas/upload/proses', [App\Http\Controllers\backend\UploadController::class, 'upload/proses']);
Route::get('/adminkom/profile_komunitas/create', [App\Http\Controllers\backend\ProfileController::class, 'create']);
Route::get('/adminweb/provinsi', [App\Http\Controllers\backend\ProvinsiController::class, 'provinsi']);
Route::get('/adminweb/provinsi/create', [App\Http\Controllers\backend\ProvinsiController::class, 'create']);
Route::post('/adminweb/provinsi/store', [App\Http\Controllers\backend\ProvinsiController::class, 'store']);

// Route::group(['namespace' => 'App\Http\Controllers\backend'], function () {
//     Route::resource('profile_komunitas', 'ProfileController');
// });