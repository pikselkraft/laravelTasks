<?php

class TasksController extends BaseController {

	public function index()
	{
		//return 'tasks';

		// fetch all tasks
		$tasks = Task::all(); 

		//return $tasks;
		// load a view to display them
		return View::make('tasks.index', compact('tasks'));
	}

}
