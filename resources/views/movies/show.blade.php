@extends('layouts.app')

@section('title', 'Movie Details')

@section('content')
<h1>
    {{$movie->title}}
    <a href="{{route('movies.index')}}">libreria</a>
</h1>
@endsection
