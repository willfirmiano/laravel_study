@extends('foo/base')

@section('title', 'Show Id Page')

@section('content')
    <h2>Id:</h2>
    {{ $id }}
@endsection