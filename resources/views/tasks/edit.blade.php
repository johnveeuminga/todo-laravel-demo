@extends('layouts.layout')

@section('contents')
    <h1>Edit Task</h1>
    <form 
		method='POST' 
		action='/tasks/{{$task->id}}'
	>
		@csrf

        @method('PATCH')

		<div class="form-group">
			<label for="name">Name: </label>
			<input type="text" class="form-control" id='name' name='name' placeholder='Name: ' value='{{ $task->name }}'>
		</div>
		<div class="form-group">
			<label for="description">Description: </label>
			<textarea class="form-control" id='description' name='description' placeholder='Description: '>{{ $task->description }}</textarea>
		</div>
		<button type="submit" class='btn btn-primary'>Submit</button>
	</form>
@endsection