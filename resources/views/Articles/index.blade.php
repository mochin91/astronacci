@extends('layouts.main')

@section('container')
    <div class="row mt-3 ms-3 mb-3">
        <div class="col">
            <h1 class="fs-1"><u>Articles</u></h1>
        </div>
    </div>
    <div class="row justify-content-center">
        @foreach ($data as $article)
            <div class="col-md-8 mb-3">
                <div class="card shadow">
                    <div class="card-body">                        
                        <a href="{{ url("Article/detail/$article->slug") }}" alt="{{ $article->slug }}" 
                            class="text-decoration-none text-dark">
                            <h2>{{ $article->title }}</h2>
                            <p class="mt-3">{{ $article->excerpt }}</p>
                        </a>
                        <a href="{{ url("Article/detail/$article->slug") }}" alt="{{ $article->slug }}" 
                            class="text-end">
                            <p>Lihat Selengkapnya</p>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection