@extends('layouts.app')

@section('title', 'list index')

@section('content')

    <h1>Tasks List index</h1>
    
    <div>
        {!! link_to_route('tasks.create', 'Create New Task!', '', ['class' => 'btn btn-primary']) !!}
    </div>
    <hr>
    <div>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Task</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
        @if (count($tasks) > 0)
            @foreach($tasks as $task)
                <tr>
                  <th scope="row">{{ $task->id }}</th>
                  <td>{{ link_to_route('tasks.show', $task->content, ['id' => $task->id]) }}</td>
                  <td>{!! link_to_route('tasks.edit', 'Edit!', ['id' => $task->id], ['class' => 'btn btn-success']) !!}</td>
                  <td>
                    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete', 'class' => 'form-group']) !!}
                      {!! Form::submit('Delete', ['class' => 'btn btn-dark']) !!}
                    {!! Form::close() !!}
                  </td>
                </tr>
            @endforeach
        @endif
          </tbody>
        </table>
    </div>
    <!--{!! Form::checkbox($task->id, 'value') !!}-->
@endsection