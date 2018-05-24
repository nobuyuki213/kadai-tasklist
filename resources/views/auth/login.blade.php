@extends('layouts.app')

@section('title', 'login')

@section('content')
    <div class="jumbotron">
        <div class="text-center">
            <h1 class="display-3">Log in</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-9 mt-3 mx-1">
                {!! Form::open(['route' => 'login.post']) !!}
                    <div class="form-group row">
                        {!! Form::label('email', 'Email', ['class' => 'col-sm-3 col-form-label']) !!}
                        {!! Form::email('email', old('email'), ['class' => 'form-control col-sm-9', 'placeholder' => 'email']) !!}
                    </div>
                    <div class="form-group row">
                        {!! Form::label('password', 'Password', ['class' => 'col-sm-3 col-form-label']) !!}
                        {!! Form::password('password', ['class' => 'form-control col-sm-9', 'placeholder' => 'password']) !!}
                    </div>
                    <div class="form-group row">
                        {!! Form::button('Log in', ['class' => 'btn btn-primary btn-block btn-lg col-sm-12', 'type' => 'submit']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection