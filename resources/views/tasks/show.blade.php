@extends('layouts.app')

@section('title', 'list show')

@section('content')

    <h1>Task List</h1>
    
    <span>
        {!! link_to_route('tasks.edit', 'Edit Task!', ['id' => $task->id], ['class' => 'btn btn-success']) !!}
    </span>
    
    <hr>
        <h4>{{ $task->content }}</h4>
    <hr>
    <span>
        {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete', 'class' => 'form-group']) !!}
            {!! Form::submit('Delete Task', ['class' => 'btn btn-dark']) !!}
        {!! Form::close() !!}
    </span>
    
    
@endsection