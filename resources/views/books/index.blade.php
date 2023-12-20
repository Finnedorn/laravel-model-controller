@extends('layouts.app')

@section('title', 'All Books')

@section('content')
<section class="bg-dark">
    <div class="container py-5">
        <div class="row gy-4 ">
            @foreach ($books as $book)
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card h-100 rounded-3 overflow-hidden border-0 ">
                        <a href="{{route('books.show', $book->id)}}">
                            <div class="overflow-hidden" style="height: 450px">
                                <img class="w-100" src="{{$book->cover_image}}" alt="{{$book->title}}">
                            </div>
                        </a>
                        <div class="card-body">
                            <h4 class="card-title text-dark">
                                {{$book->title}}
                            </h4>
                            <p class="card-text">
                                {!! substr($book->plot, 0, 100) . '...' !!}
                            </p>
                        </div>
                        <div class="pb-3 px-3 ">
                            <a class="btn btn-warning text-light" href="{{route('books.show', $book->id)}}">
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
