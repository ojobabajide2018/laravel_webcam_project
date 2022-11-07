@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        Welcome {{$name}}, You have successfully signed in.
                            <br>
{{$image}}
                    </div>

                </div>
            <div class="card">

Profile: Picture <br>
                <img alt="image"  width="150" height="200" src="storage/images{{$image}}">
            </div>

        </div>

    </div>

@endsection
