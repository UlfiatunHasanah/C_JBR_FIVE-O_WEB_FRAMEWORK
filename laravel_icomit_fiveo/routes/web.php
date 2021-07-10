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

Route::get('/adminkom/profile_komunitas', [App\Http\Controllers\backend\ProfileController::class, 'profile'])->name('profile_komunitas.profile');
Route::post('/adminkom/profile_komunitas/store', [App\Http\Controllers\backend\ProfileController::class, 'store'])->name('profile.store');
Route::get('/adminkom/profile_komunitas/create', [App\Http\Controllers\backend\ProfileController::class, 'create']);
Route::get('/adminkom/profile_komunitas/edit/{id_kom}', [App\Http\Controllers\backend\ProfileController::class, 'edit'])->name('profile_komunitas.edit');

Route::get('/adminweb/provinsi', [App\Http\Controllers\backend\ProvinsiController::class, 'provinsi'])->name('provinsi');
Route::get('/adminweb/provinsi/create', [App\Http\Controllers\backend\ProvinsiController::class, 'create']);
Route::post('/adminweb/provinsi/store', [App\Http\Controllers\backend\ProvinsiController::class, 'store']);
Route::get('/adminweb/provinsi/edit/{id_prov}', [App\Http\Controllers\backend\ProvinsiController::class, 'edit'])->name('provinsi.edit');
Route::put('/adminweb/provinsi/update/{id_prov}', [App\Http\Controllers\backend\ProvinsiController::class, 'update'])->name('provinsi.update');
Route::delete('/adminweb/provinsi/{id_prov}', [App\Http\Controllers\backend\ProvinsiController::class, 'destroy'])->name('provinsi.destroy');

Route::get('/adminweb/kabkot', [App\Http\Controllers\backend\KabkotController::class, 'kabkot']);
Route::get('/adminweb/kabkot/create', [App\Http\Controllers\backend\KabkotController::class, 'create'])->name('kabkot.create');
Route::post('/adminweb/kabkot/store', [App\Http\Controllers\backend\KabkotController::class, 'store'])->name('kabkot.store');
Route::get('/adminweb/kabkot/edit/{id_kabkot}', [App\Http\Controllers\backend\KabkotController::class, 'edit'])->name('kabkot.edit');
Route::delete('/adminweb/kabkot/{id_kabkot}', [App\Http\Controllers\backend\KabkotController::class, 'destroy'])->name('kabkot.destroy');

Route::get('/adminweb/datakom', [App\Http\Controllers\backend\DatakomController::class, 'datakom'])->name('data_komunitas.datakom');
Route::post('/adminweb/datakom/store', [App\Http\Controllers\backend\DatakomController::class, 'store'])->name('datakom.store');
Route::get('/adminweb/datakom/create', [App\Http\Controllers\backend\DatakomController::class, 'create'])->name('datakom.create');
Route::get('/adminweb/datakom/edit/{id_kom}', [App\Http\Controllers\backend\DatakomController::class, 'edit'])->name('admink.edit');
Route::put('/adminweb/datakom/update/{id_kom}', [App\Http\Controllers\backend\DatakomController::class, 'update'])->name('admink.update');
Route::delete('/adminweb/datakom/{id_kom}', [App\Http\Controllers\backend\DatakomController::class, 'destroy'])->name('admink.destroy');

Route::get('/adminweb/admink', [App\Http\Controllers\backend\AdminkomController::class, 'admink'])->name('admink');
Route::get('/adminweb/admink/create', [App\Http\Controllers\backend\AdminkomController::class, 'create'])->name('admink.create');
Route::post('/adminweb/admink/store', [App\Http\Controllers\backend\AdminkomController::class, 'store'])->name('admink.store');
Route::get('/adminweb/admink/edit/{id_admin_kom}', [App\Http\Controllers\backend\AdminkomController::class, 'edit'])->name('admink.edit');
Route::put('/adminweb/admink/update/{id_admin_kom}', [App\Http\Controllers\backend\AdminkomController::class, 'update'])->name('admink.update');
Route::delete('/adminweb/admink/{id_admin_kom}', [App\Http\Controllers\backend\AdminkomController::class, 'destroy'])->name('admink.destroy');

// Route::group(['namespace' => 'App\Http\Controllers\backend'], function () {
//     Route::resource('profile_komunitas', 'ProfileController');
// });