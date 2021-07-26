 <?php

use Illuminate\Support\Facades\Artisan;
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

//Landing Page//
Route::get('/','PageController@tentang')->name('/');
Route::get('/detailpengguna/{id}','PageController@detail');
Route::get('/kom','PageController@guest')->name('/kom');
Route::get('/bantuan','PageController@bantuan')->name('/bantuan');

//login//
Route::get('/login','LoginController@index')->name('/login'); 
Route::post('/postlogin','LoginController@login')->name('/postlogin'); 

//logout//
Route::get('/logout','LoginController@logout')->name('/login'); 

//daftar//
Route::get('/daftar','DaftarController@index')->name('/daftar');
Route::post('/daftar','DaftarController@store')->name('/daftar/store');
Route::get('/list_kabupaten/{provinsi_id}','DaftarController@listkabupaten');


Route::group(['middleware' => ['auth:pengguna']], function(){
//User//
Route::get('/home','PenggunaController@index')->name('/home');
Route::get('/profil','PenggunaController@profil')->name('/profil');
Route::post('/editkom/{id}/update','PenggunaController@update');
Route::get('/detailpengguna2/{id}','PenggunaController@detail');
Route::get('/user-kom','PenggunaController@kom')->name('/user-kom');
Route::get('/user-bantuan','PenggunaController@bantuan')->name('/user-bantuan');

});


Route::group(['middleware' => ['auth:admin']], function(){
//Admin//
Route::get('/admin-home','AdminController@index')->name('/admin');; 
Route::get('/pengguna2/{id}/edit','AdminController@editstatus2');
Route::get('/pengguna1/{id}/edit','AdminController@editstatus1');
Route::get('/admin-list','AdminController@list')->name('/admin-list');; 
Route::get('/detail/{id}','AdminController@detail');


});

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});





