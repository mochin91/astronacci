@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-3">
    <div class="col-md-6">
        <div class="card shadow">
            <iframe class="card-img-top" width="560" height="315" src="{{ $data->embed }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        

            <div class="card-body">
                <h3>{{ $data->title }}</h3>
            </div>
        </div>        
    </div>
</div>
@endsection