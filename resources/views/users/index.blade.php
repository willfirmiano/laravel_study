@extends('foo/base')

@section('title', 'Users Page')

@section('content')
    <h2>User List</h2>
    @foreach($users as $user)
        <li>{{ $user }}</li>
    @endforeach
@endsection