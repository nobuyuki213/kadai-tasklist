@extends('layouts.app')

@section('title', 'Task show')

@section('content')
    <div class="text-center">
        <h1>Task</h1>
    </div>

    <table class="table table-hover">
        <tr>
            <th>No</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>Task</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $task->status }}</td>
        </tr>
    </table>

    <div class="row">
        <div class="col-6">
            <p>{!! Html::decode(link_to_route('tasks.edit', '<i class="far fa-edit"></i> Edit task!', ['id' => $task->id], ['class' => 'btn btn-success'])) !!}</p>
        </div>
        <div class="col-6">
            {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete', 'class' => 'form-group']) !!}
                <p style="text-align: right;">{!! Form::button('<i class="far fa-trash-alt"></i> Delete task', ['class' => 'btn btn-dark', 'type' => 'submit']) !!}</p>
            {!! Form::close() !!}
        </div>
    </div>
@endsection