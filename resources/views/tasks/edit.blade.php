@extends('layouts.app')

@section('title', 'edit!')

@section('content')
    <div class="text-center">
        <h1>Task editing</h1>
        <h5>Task No：{{ $task->id }}</h5>
    </div>
    <div class="row justify-content-center">
        <div class="col-xl-6 col-xl-offset-3 col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('content', 'Task edit：') !!}
                    <P>{{ Form::text('content', $task->content, ['class' => 'form-control']) }}</P>
                </div>
                <div class="form-group">
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
                </div>    
                <p>{!! Form::button('<i class="fas fa-arrow-circle-up"></i> Update!', ['class' => 'btn btn-success', 'type' => 'submit']) !!}</p>
            {!! Form::close() !!}
        </div>
    </div>
@endsection