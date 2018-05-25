@extends('layouts.app')

@section('title', 'welcome')

@section('content')
    @if(Auth::check())
        <?php $user = Auth::user(); ?>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="media">
                    <img class="mr-3 img-responsive" src="{{ Gravatar::src($user->email, 60) }}" alt="Generic placeholder image">
                    <div class="media-body">
                        <h1 class="mt-0">{{ $user->name }}</h1>
                    </div>
                </div>
                @if (Auth::user()->id === $user->id)
                    @include('tasks.task_add')
                @endif
                @if (count($tasks) > 0)
                    @include('tasks.tasks', ['tasks' => $tasks])
                @endif
            </div>
        </div>
    @else
        <div class="jumbotron">
            <div class="text-center">
                <h1 class="display-4">Welcome Task application!</h1>
                <hr class="my-4">
                <div class="row">
                    <div class="offset-lg-2 col-lg-4 col-md-6 mt-2">
                        <div class="card">
                            <h5 class="card-header">
                            Account registration
                            </h5>
                            <div class="card-body">
                                <h5 class="card-title">アカウント登録</h5>
                                {!! link_to_route('signup.get', 'Sign up', null, ['class' => 'btn btn-primary btn-lg']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-2">
                        <div class="card">
                            <h5 class="card-header">
                            Member login
                            </h5>
                            <div class="card-body">
                                <h5 class="card-title">ログイン</h5>
                                {!! link_to_route('login', 'Log in', null, ['class' => 'btn btn-success btn-lg']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection