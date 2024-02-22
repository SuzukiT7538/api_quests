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

// Route::middleware('auth:api')->post('/todos', 'quest3Controller@');

Route::get('/todos', 'todoController@showAllTodo')->middleware('cors');
Route::post('/todos', 'todoController@addTodo')->middleware('cors');
Route::put('/todos/{id}', 'todoController@editTodo')->middleware('cors');
Route::delete('/todos/{id}', 'todoController@deleteTodo')->middleware('cors');
