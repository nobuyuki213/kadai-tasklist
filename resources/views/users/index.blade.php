@extends('layouts.app')

@section('title', 'users')

@section('content')
    @include('users.users', ['users' => $users])
@endsection