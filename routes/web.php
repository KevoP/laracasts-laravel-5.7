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

/**
 * Pages Routes
 */
Route::get('/', 'PagesController@home');
Route::get('/contact', 'PagesController@contact');
Route::get('/about',  'PagesController@about');

/**
 * Projects Routes
 */
Route::resource('projects', 'ProjectsController');

/**
 * Project Tasks
 */
Route::post('/projects/{project}/task', 'ProjectTasksController@store');

/**
 * Tasks 
 */
Route::patch('/tasks/{task}', 'ProjectTasksController@update');
Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');