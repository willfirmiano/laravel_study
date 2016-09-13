@extends('users.base')

@section('title', 'Create user')

@section('content')
    <form action="/user/add" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="password" placeholder="Repeat Password">
        <input type="submit" value="Submit">
    </form>
@endsection