@extends('layouts.app')

@section('title', 'Task show')

@section('content')

    <h1>Task list</h1>
    
    <p>
        {!! Html::decode(link_to_route('tasks.edit', '<i class="far fa-edit"></i> Edit task!', ['id' => $task->id], ['class' => 'btn btn-success'])) !!}
    </p>
    <h4>Task number：{{ $task->id }}</h4>
    <p>Task：{{ $task->content }}</p>
    <p>Status：{{ $task->status }}</p>
    <p>
        {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete', 'class' => 'form-group']) !!}
            {!! Form::button('<i class="far fa-trash-alt"></i> Delete task', ['class' => 'btn btn-dark', 'type' => 'submit']) !!}
        {!! Form::close() !!}
    </p>
@endsection