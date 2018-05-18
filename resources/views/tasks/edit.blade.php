@extends('layouts.app')

@section('title', 'edit!')

@section('content')

    <h1>Task Editing</h1>

    <h4>Task:id {{ $task->id }}</h4>
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put', 'class' => 'form-group']) !!}
        
        {!! Form::label('content', 'Task Edit：') !!}
        <P>{{ Form::text('content', $task->content, ['class' => 'form-control']) }}</P>
        <p>{!! Form::submit('Update!', ['class' => 'btn btn-success']) !!}</p>
        
    {!! Form::close() !!}
@endsection