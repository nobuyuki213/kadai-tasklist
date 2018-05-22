@extends('layouts.app')

@section('title', 'New create')

@section('content')
    <div class="text-center">
        <h1>Task new create</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-xl-6 col-xl-offset-3 col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
            {!! Form::model($task, ['route' => 'tasks.store'] ) !!}
                <div class="form-group">
                    {!! Form::label('content', 'Add task:') !!}
                    <P>{!! Form::text('content', '', ['class' => 'form-control', 'placeholder' => 'running!']) !!}</P>
                </div>
                <div class="form-group">
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
                </div>
                <p>{!! Form::button('<i class="fas fa-plus-circle"></i> Add task!', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}</p>
                
            {!! Form::close() !!}
        </div>
    </div>
@endsection