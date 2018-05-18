@extends('layouts.app')

@section('title', 'New Create')

@section('content')

    <h1>Task New Create</h1>

    {!! Form::model($task, ['route' => 'tasks.store', 'class' => 'form-group'] ) !!}
    
        {!! Form::label('content', 'Add Task') !!}：
        <P>{!! Form::text('content', '', ['class' => 'form-control', 'placeholder' => 'running!']) !!}</P>
        <p>{!! Form::submit('Add Task!', ['class' => 'btn btn-primary']) !!}</p>
        
    {!! Form::close() !!}
@endsection