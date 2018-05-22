@extends('layouts.app')

@section('title', 'index')

@section('content')
    <div class="text-center">
      <h1>Tasks list</h1>
    </div>
    
    <p>{!! Html::decode(link_to_route('tasks.create', '<i class="fas fa-plus-circle"></i> Create new task!', array(), ['class' => 'btn btn-primary'])) !!}</p>
    <div>
      @if (count($tasks) > 0)
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
            @foreach($tasks as $task)
                <tr>
                  <th scope="row">{{ $task->id }}</th>
                  <td>{{ link_to_route('tasks.show', $task->content, ['id' => $task->id]) }}</td>
                  <td>{{ $task->status }}</td>
                  <td class="text-center">{!! Html::decode(link_to_route('tasks.edit', '<i class="far fa-edit"></i>', ['id' => $task->id], ['class' => 'btn btn-success'])) !!}</td>
                  <td class="text-center">
                    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete', 'class' => 'form-group']) !!}
                      {!! Form::button('<i class="far fa-trash-alt"></i>', ['class' => 'btn btn-dark', 'type' => 'submit']) !!}
                    {!! Form::close() !!}
                  </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      @endif
    </div>
@endsection