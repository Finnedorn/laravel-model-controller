@extends('layouts.app')

@section('title', 'Movie Details')

@section('content')
<main class="position-relative vh-100 bg-dark" >
    <div>
        {{-- jumbotron --}}
        <div class="overflow-hidden jumbotron" style="height: 250px">
            <img class="w-100" src="{{$movie->image}}" alt="{{$movie->title}}">
        </div>
    </div>
    <div class="container py-5 position-absolute my-card-position">
        <div class="d-flex bg-light rounded-3 overflow-hidden">
            <div>
                <img src="{{$movie->image}}" alt="{{$movie->title}}" class=" w-100">
            </div>
            <div class="p-5">
                <div>
                    <h1>
                       Title: {{$movie->title}}
                    </h1>
                    <h3>
                       Original Title: {{$movie->original_title}}
                    </h3>
                    <div class="py-2 pb-4">
                        <div>
                            Language: {{$movie->language}}
                        </div>
                        <div>
                            Average Vote: {{$movie->vote / 2}}
                        </div>
                    </div>
                </div>
                <div>
                    <a class="btn btn-warning text-light" href="{{route('movies.index')}}">
                        Back to Shop
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
