@extends('layouts.main')

@section('container')
    <div class="row mt-3 ms-3 mb-3">
        <div class="col">
            <h1 class="fs-1"><u>Videos</u></h1>
        </div>
    </div>
    <div class="row">
        @foreach ($data as $video)
            <div class="col-md-4">
                <div class="card">
                    <a href="{{ url("Videos/detail/$video->slug") }}" alt="{{ $video->slug }}">
                        <img src="{{ asset($video->thumbnails) }}" class="card-img-top" alt="{{ $video->name }}">
                    </a>
                    <div class="card-body">
                        <a href="{{ url("Videos/detail/$video->slug") }}" alt="{{ $video->slug }}" class="text-decoration-none text-dark">
                            <h5 class="card-title">{{ $video->title }}</h5>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection