<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    /**
	 * Displays all task
	 * 
	 * @return View;
	 */
    public function index () {
		//Select * from tasks;
		$tasks = Task::all();

    	return view('tasks', ['tasks' => $tasks]);
	}
	
	// Route Model Binding
	public function show (Task $task) {
		return view('tasks.show', [
			'task' => $task
		]);
	}

    public function store (Request $request) {
		// $task = new Task;

		// $task->name = $request->name;
		// $task->description = $request->description;

		// $task->save();

		// Eloquent Mass Assignment
		$task = Task::create([
			'name' => $request->name,
			'description' => $request->description,
		]);

		return redirect('/tasks');
	}

	public function edit ($id) {
		$task = Task::find($id);

		return view('tasks.edit', [
			'task' => $task
		]);
	}

	public function update ($id, Request $request) {
		// $task = Task::find($id);
		
		// $task->name = $request->name;
		// $task->description = $request->description;

		// $task->save();

		// Eloquent Mass Assignment
		$task = Task::update([
			'name' => $request->name,
			'description' => $request->description,
		]); 
		return redirect('/tasks/'. $id);
	}

	public function destroy($id) {
		$task = Task::find($id);
		$task->delete();
		return redirect('/tasks');
	}

}
