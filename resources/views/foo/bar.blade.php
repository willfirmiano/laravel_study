@extends('foo/base')

@section('title', 'Bar Page')

@section('content')
    <h2>Bar</h2>
    <a>asbhdashdu</a>

    @if (true)
        return true
    @endif

    @foreach(['foo', 'bar', 'baz'] as $item)
        <li>{{ $item }}</li>
    @endforeach
@endsection