@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                <p>Welcome to Community Exchange. Designed to empower your community welfare.
                </p>
                <br>
                <a href="/blog" class="btn btn-outline-primary">Show Feed</a>
            </div>
        </div>
    </div>
@endsection