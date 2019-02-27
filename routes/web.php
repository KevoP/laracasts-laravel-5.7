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

use App\Notifications\SubscriptionRenewalFailed;

// use App\Repositories\UserRepository;

// Route::get('/', function(UserRepository $users){
//     dd($users);
//     return view('welcome');
// });

// use App\Services\Twitter;

// Route::get('/', function(Twitter $twitter){
//     dd($twitter);
//     return view('welcome');
// });

// app()->singleton('example', function(){
//     return new \App\Example;
// });

// Route::get('/', function(){
//     dd(app('App\Example'));
//     return view('welcome');
// });



/**
 * Pages Routes
 */
Route::get('/', 'PagesController@home');
Route::get('/contact', 'PagesController@contact');
Route::get('/about',  'PagesController@about');

/**
 * Projects Routes
 */
Route::resource('projects', 'ProjectsController')
    ->middleware('can:view,project');

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

/**
 * Notification Test
 */
Route::get('/notifications', function(){
    $user = App\User::first();
    $user->notify(new SubscriptionRenewalFailed);
    return 'Done';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
