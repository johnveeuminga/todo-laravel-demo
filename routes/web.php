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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
	// return "Hello this is the about page.";

	// Get tasks here.
	$tasks = [
		'Task #1',
		'Task #2',
		'Task #3',
	];


	return view('about', [
		'name' => 'John Vee Uminga',
		'age'	=> 22,
		'tasks'	=> $tasks,
	]);
});

// Define a new route /contact
Route::get('/contact', function() {
	return view('contact');
});


// Define a new route /tasks
// Route::get('/tasks', 'TasksController@index');
// Route::post('/tasks', 'TasksController@store');
// Route::get('/tasks/{id}', 'TasksController@show');
// Route::get('/tasks/{id}/edit', 'TasksController@edit');
// Route::patch('/tasks/{id}', 'TasksController@update');
// Route::delete('/tasks/{id}', 'TasksController@delete');

Route::resource('tasks', 'TasksController');
Route::resource('projects', 'ProjectsController');

Route::get('/tasks/newest', 'TasksContoller@index')->name('tasks.new');