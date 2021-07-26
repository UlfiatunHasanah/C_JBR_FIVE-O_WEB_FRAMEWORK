<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\pengguna;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Landing Page//
Route::get('/','ApiController@tentang');
Route::get('/detailpengguna/{id}','ApiController@detail');
Route::get('/kom','ApiController@guest');
Route::get('/bantuan','ApiController@bantuan');