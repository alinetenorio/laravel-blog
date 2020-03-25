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

Route::apiResource('post', 'PostController');
Route::apiResource('comment', 'CommentController');
Route::apiResource('tag', 'TagController');
Route::apiResource('category', 'CategoryController');

//not tested yet
Route::apiResource('user', 'UserController');

