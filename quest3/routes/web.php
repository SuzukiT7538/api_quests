<?php

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

Route::get('/health', 'quest3Controller@health');
Route::get('/todos', 'quest3Controller@showAllTodo');
Route::post('/todos', 'quest3Controller@todos');
Route::post('/todos/{id?}', 'quest3Controller@updateTodo');
Route::delete('/todos/{id?}', 'quest3Controller@deleteTodo');
