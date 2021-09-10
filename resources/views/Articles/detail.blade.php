@extends('layouts.main')

@section('container')
{{-- @dd( $data->member ) --}}
{{-- @dd( Auth::user()->member ) --}}
@if (Auth::user()->member == $data->member)
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="mt-3">{{ $data->title }}</h2>
                    <p class="mt-5">
                        {{ $data->body }}
                    </p>
                </div>
            </div>    
        </div>
    </div>    
@else
    <script> window.location = "/Article"; </script>
@endif
@endsection