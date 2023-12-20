@extends('layouts.app')

@section('title', 'Movie library')

@section('content')
<section class="bg-dark">
    <div class="container py-5">
        <div class="row gy-4 ">
            @foreach ($movies as $movie)
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card h-100 rounded-3 overflow-hidden border-0 ">
                        <a href="{{route('movies.show', $movie->id)}}">
                            <div class="overflow-hidden" style="height: 450px">
                                <img class="w-100" src="{{$movie->image}}" alt="{{$movie->title}}">
                            </div>
                        </a>
                        <div class="card-body">
                            <h4 class="card-title text-dark">
                                {{$movie->title}}
                            </h4>
                            <small class="card-text">
                                {{$movie->vote}}
                            </small>
                        </div>
                        <div class="pb-3 px-3 ">
                            <a class="btn btn-warning text-light" href="{{route('movies.show', $movie->id)}}">
                                Details
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
