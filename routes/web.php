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

Route::get('/', 'PagesController@index');

Route::get('/contact', 'PagesController@contact');

Route::get('/about', 'PagesController@about');

Route::resource('projects', 'ProjectsController');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

/* Route::patch('/tasks/{task}', 'ProjectTasksController@update'); */

Route::post('/completed-task/{task}', 'CompletedTasksController@store');

Route::delete('/completed-task/{task}', 'CompletedTasksController@destroy');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
