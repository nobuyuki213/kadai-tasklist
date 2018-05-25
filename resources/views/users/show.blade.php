@extends('layouts.app')

@section('title', 'my page')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="media">
            <img class="mr-3 img-responsive" src="{{ Gravatar::src($user->email, 50) }}" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0">{{ $user->name }} <span class="badge badge-secondary">{{ $count_tasks }}</span></h5>
            </div>
        </div>
        @if (Auth::user()->id === $user->id)
            @include('tasks.task_add')
        @endif
        @if (count($tasks) > 0)
            @include('tasks.tasks', ['tasks' => $tasks])
        @else
            <h1 class="display-4 text-center text-muted">Let's add a task!</h1>
        @endif
    </div>
</div>
@endsection