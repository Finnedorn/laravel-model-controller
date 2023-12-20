@extends('layouts.app')

@section('title', 'All Books')

@section('content')
<h1>
    {{$book->title}}
    <a href="{{route('books.index')}}">libreria</a>
</h1>
@endsection
