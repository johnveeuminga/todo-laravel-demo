@extends('layouts.layout')

@section('contents')
    <h1>{{ $task->name }}</h1>
    <p>
        {{ $task->description }}
    </p>
    <div class="d-flex align-items-start">

        <a href='/tasks/{{ $task->id }}/edit' class='btn btn-primary mr-2'>Edit Task</a>
        <!-- <form 
            method='POST'
            action="/tasks/{{ $task->id }}"
        >
            @csrf
            @method('DELETE')
            <button type='submit' class='btn btn-danger'>
                Delete
            </button>
        </form> -->
        <button class='btn btn-danger' data-toggle="modal" data-target="#exampleModal">
            Delete
        </button>
    </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        Are you sure you want to delete this task?
                    </div>
                    <div class="modal-footer d-flex align-items-start">
                        <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Cancel</button>
                        <form method='POST' action="/tasks/{{ $task->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Yes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection