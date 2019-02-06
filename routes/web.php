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

// display all
// Route::get('/projects', 'ProjectsController@index');
// // display form to create new instance
// Route::get('/projects/create', 'ProjectsController@create');
// // display single 
// Route::get('/projects/{project}', 'ProjectsController@show');
// // save/persist a new instance
// Route::post('/projects', 'ProjectsController@store');
// // display a form to edit an existing instance
// Route::get('/projects/{project}/edit', 'ProjectsController@edit');
// // update a single instance
// Route::patch('/projects/{project}', 'ProjectsController@update');
// // Delete a singe instance
// Route::delete('/projects/{project}', 'ProjectsController@destroy');
// // all of the above could be reduced to
