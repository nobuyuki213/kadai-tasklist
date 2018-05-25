@extends('layouts.app')

@section('title', 'edit!')

@section('content')
    <div class="row">
        <div class="col-xl-8 offset-xl-2 col-md-10 offset-md-1">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('content', 'Task edit：') !!}
                    {{ Form::text('content', $task->content, ['class' => 'form-control']) }}
                </div>
                <p>{!! Form::button('<i class="fas fa-arrow-circle-up"></i> Update!', ['class' => 'btn btn-success btn-block', 'type' => 'submit']) !!}</p>
            {!! Form::close() !!}
        </div>
    </div>
@endsection