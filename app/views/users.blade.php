@extends('layout')

@section('content')
    @foreach($users as $user)
        <p>{{ $user->name }} or {{ $user->email }}</p>
    @endforeach
@stop