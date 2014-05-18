<?php

Event::listen('illuminate.query',function($query)
{
	//var_dump($query);
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/	

Route::get('/',['as' => 'home', 'uses' => 'TasksController@Index']);

Route::get('tasks/{id}', 'TasksController@show')->where('id', '\d+');

Route::get('{username}/tasks', function($username) 
{

	// find user by their username from the user table
	// return User::where('username', '=', $username)->first();
	$user = User::whereUsername($username)->first();
	// geet all taks associated with that user
	//return Task::whereUserId($user->id)->get();
	return $user->tasks;
	// and return them 
});

Route::get('{username}/tasks/{id}', function($username, $id)
{

	// find task by id
	$user = User::whereUsername($username)->first();
	$task = $user->tasks()->findOrFail($id);
	//$task = $user->tasks();
	//dd($task);

	return View::make('tasks.show', compact('task'));
});