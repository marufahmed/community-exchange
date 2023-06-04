@extends('layouts.app')
@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card justify-content-center" style="width: 400px;">
            <img class="card-img-top" src="https://picsum.photos/400" alt="Card image cap">
                <div class="card-body">
                    <h1 class="display-one">{{ ucfirst($post->name) }}</h1>
                    <p>Name of the Item: {!! $post->name  !!}</p> 
                    <p>Description: {!! $post->description  !!}</p> 
                    <p>User: {!! $post->user_id  !!}</p> 
                    <p>Valuation: {!! $post->valuation  !!}</p> 
                    <a href="/blog" class="btn btn-primary">Back</a>
                    <a href="/blog/{{ $post->id }}/edit" class="btn btn-outline-primary">Edit Post</a>
                    <br></br>
                    <form id="delete-frm" class="" action="" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger width:100%">Delete Post</button>
                    </form>
                 </div>
    </div>
@endsection