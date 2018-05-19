@extends('layouts.app')

@section('title', 'New create')

@section('content')

    <h1>Task new create</h1>

    {!! Form::model($task, ['route' => 'tasks.store', 'class' => 'form-group'] ) !!}
    
        {!! Form::label('content', 'Add task:') !!}
        <P>{!! Form::text('content', '', ['class' => 'form-control', 'placeholder' => 'running!']) !!}</P>
        
        {!! Form::label('status', 'Completion status:') !!}
        <p>{!! Form::select('status', [
            '0%'=>'0%',
            '10%'=>'10%',
            '20%'=>'20%',
            '30%'=>'30%',
            '40%'=>'40%',
            '50%'=>'50%',
            '60%'=>'60%',
            '70%'=>'70%',
            '80%'=>'80%',
            '9%'=>'90%',
            '100%'=>'100%'
            ], '', ['class' => 'form-control']) !!}</p>
        
        <p>{!! Form::button('<i class="fas fa-plus-circle"></i> Add task!', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}</p>
        

    {!! Form::close() !!}
@endsection