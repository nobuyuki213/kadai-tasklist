@extends('layouts.app')

@section('title', 'index')

@section('content')

    <h1>Tasks list</h1>
    
    <p>{!! Html::decode(link_to_route('tasks.create', '<i class="fas fa-plus-circle"></i> Create new task!', array(), ['class' => 'btn btn-primary'])) !!}</p>
    <div>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Task</th>
            <th scope="col">Status</th>
            <th scope="col" class="text-center"><i class="far fa-edit"></i></th>
            <th scope="col" class="text-center"><i class="far fa-trash-alt"></i></th>
          </tr>
        </thead>
        <tbody>
          @if (count($tasks) > 0)
              @foreach($tasks as $task)
                  <tr>
                    <th scope="row">{{ $task->id }}</th>
                    <td>{{ link_to_route('tasks.show', $task->content, ['id' => $task->id]) }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{!! Html::decode(link_to_route('tasks.edit', '<i class="far fa-edit"></i>', ['id' => $task->id], ['class' => 'btn btn-success'])) !!}</td>
                    <td>
                      {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete', 'class' => 'form-group']) !!}
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['class' => 'btn btn-dark', 'type' => 'submit']) !!}
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