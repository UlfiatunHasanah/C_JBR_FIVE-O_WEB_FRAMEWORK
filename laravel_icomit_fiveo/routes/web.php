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

//Landing Page//
Route::get('/','PageController@tentang');
Route::get('/detailpengguna/{id}','PageController@detail');
Route::get('/kom','PageController@guest');
Route::get('/bantuan','PageController@bantuan');

//User//
Route::get('/home','PenggunaController@index');
Route::get('/profil','PenggunaController@profil');
Route::post('/editkom/{id}/update','PenggunaController@update');
Route::get('/detailpengguna2/{id}','PenggunaController@detail');
Route::get('/user-kom','PenggunaController@kom');
Route::get('/user-bantuan','PenggunaController@bantuan');

});

Route::get('/admin-home','AdminController@index'); 
Route::get('/pengguna2/{id}/edit','AdminController@editstatus2');
Route::get('/pengguna1/{id}/edit','AdminController@editstatus1');
Route::get('/admin-list','AdminController@list'); 
Route::get('/detail/{id}','AdminController@detail');


});






