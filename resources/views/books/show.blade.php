@extends('layouts.app')

@section('title', 'Book details')

@section('content')
<main class="position-relative vh-100 bg-dark" >
    <div>
        {{-- jumbotron --}}
        <div class="overflow-hidden jumbotron" style="height: 250px">
            <img class="w-100" src="{{$book->cover_image}}" alt="{{$book->title}}">
        </div>
    </div>
    <div class="container py-5 position-absolute my-card-position">
        <div class="d-flex bg-light rounded-3 overflow-hidden">
            <div>
                <img src="{{$book->cover_image}}" alt="{{$book->title}}">
            </div>
            <div class="p-5">
                <div>
                    <h1>
                       Title: {{$book->title}}
                    </h1>
                    <p>
                        Plot: {!! $book->plot !!}
                    </p>
                </div>
                <div>
                    <a class="btn btn-warning text-light" href="{{route('books.index')}}">
                        Back to Shop
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
