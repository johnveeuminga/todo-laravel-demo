@extends('layouts.layout')

@section('contents')
	<h1 class='text-center'>Tasks</h1>
	<ul>
		@foreach($tasks as $task)
			<li>
				<strong>{{ $task->id }}: </strong>
				<a href="/tasks/{{$task->id}}">{{ $task->name }}</a>
			</li>	
		@endforeach
	</ul>
	<hr>
	<form 
		method='POST' 
		action='/tasks/'
	>
		@csrf

		<div class="form-group">
			<label for="name">Name: </label>
			<input type="text" class="form-control" id='name' name='name' placeholder='Name: '>
		</div>
		<div class="form-group">
			<label for="description">Description: </label>
			<textarea class="form-control" id='description' name='description' placeholder='Description: '></textarea>
		</div>
		<button type="submit" class='btn btn-primary'>Submit</button>
	</form>

	<a href="{{route('tasks.index')}}">Go back to Tasks</a>
@endsection