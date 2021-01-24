<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/select-quiz', 'App\Http\Controllers\SectionController@index');
Route::get('/quizzes', 'App\Http\Controllers\SectionController@getSection');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
