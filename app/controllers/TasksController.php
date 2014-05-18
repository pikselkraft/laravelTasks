<?php

class TasksController extends BaseController {

	public function index()
	{
		//return 'tasks';

		// fetch all tasks
		$tasks = Task::all(); 
		//$tasks = Task::with('user')->get(); 
		//return $tasks;
		// load a view to display them
		return View::make('tasks.index', compact('tasks'));
	}

	public function show($id)
	{
		//return 'show task with id of ' . $id;
		
		// fetch single tasks
		$task = Task::findOrFail($id); 

		// load a view to display them
		return View::make('tasks.show', compact('task'));
		
	}

}
