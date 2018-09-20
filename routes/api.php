<?php

use Illuminate\Http\Request;

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
//List articles
Route::get('articles', 'ApisController@index');

//list single articles

Route::get('article/{id}', 'ApisController@show');

// create new article

Route::post('article', 'ApisController@store');

// Update Article

Route::put('article', 'ApisController@store');

//delete article
Route::delete('article/{id}', 'ApisController@destroy');

