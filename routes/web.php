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

Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');

// フォルダ作成機能
Route::get('/folders/create', 'FolderController@showCreateForm')->name('folders.create');
Route::post('/folders/create', 'FolderController@create');

// タスク作成機能
Route::get('/folders/{id}/tasks/create', 'TaskController@showCreateForm')->name('tasks.create');
Route::post('/folders/{id}/tasks/create', 'TaskController@create');

// タスク編集機能
Route::get('/folders/{id}/tasks/{task_id}/edit', 'TaskController@showEditForm')->name('tasks.edit');
Route::post('/folders/{id}/tasks/{task_id}/edit', 'TaskController@edit');
