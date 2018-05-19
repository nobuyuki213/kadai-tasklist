@extends('layouts.app')

@section('title', 'edit!')

@section('content')

    <h1>Task editing</h1>

    <h4>Task number：{{ $task->id }}</h4>
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put', 'class' => 'form-group']) !!}
        
        {!! Form::label('content', 'Task edit：') !!}
        <P>{{ Form::text('content', $task->content, ['class' => 'form-control']) }}</P>
        
        {!! Form::label('status', 'Completion status：') !!}
        <p>{!! Form::select('status', [
            '0%' => '0%',
            '10%' => '10%',
            '20%' => '20%',
            '30%' => '30%',
            '40%' => '40%',
            '50%' => '50%',
            '60%' => '60%',
            '70%' => '70%',
            '80%' => '80%',
            '90%' => '90%',
            '1000%' => '100%',
            ], null, ['class' => 'form-control']) !!}</p>
            
        <p>{!! Form::button('<i class="fas fa-arrow-circle-up"></i> Update!', ['class' => 'btn btn-success', 'type' => 'submit']) !!}</p>
    {!! Form::close() !!}
@endsection