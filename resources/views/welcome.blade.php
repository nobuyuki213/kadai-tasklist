@extends('layouts.app')

@section('title', 'welcome')

@section('content')
    @if(Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}
    @else
        <div class="jumbotron">
            <div class="text-center">
                <h1 class="display-4">Welcome Task application!</h1>
                <hr class="my-4">
                {!! link_to_route('signup.get', 'Sign up', null, ['class' => 'btn btn-primary btn-lg']) !!}
            </div>
        </div>
    @endif
@endsection