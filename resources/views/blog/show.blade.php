@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="row mt-5">
                <div class="col-md-6 col-xl-4">
                    <x-card class="mb-3">
                        <x-slot name="header">
                        <x-headline class="h6 mb-0">
                            <!-- <x-link class="text-body" text="Card Header Headline" href="#"/> -->
                            <h1 class="display-one">{{ ucfirst($post->name) }}</h1>
                        </x-headline>
                        </x-slot>

                        <x-slot name="image">
                        <x-image class="card-img rounded-0" src="https://via.placeholder.com/253x169" :width="[253]" :height="[169]"/>
                        </x-slot>

                        <x-slot name="body">
                        <x-headline class="h5">
                            <p>{!! $post->description, $post->user_id, $post->valuation  !!}</p> 
                        </x-headline>
                        </x-slot>

                    </x-card>
                </div>

                <div class="col-md-6 col-xl-4">
                    <x-card :all="$card" class="mb-3" :image="['width' => [253], 'height' => [169]]" :footer="['hide' => true]"/>
                </div>
                <div class="col-md-6 col-xl-4">
                    <x-card :all="$card" class="mb-3" :image="['width' => [253], 'height' => [169]]" :header="['hide' => true]"/>
                </div>
                <hr>
                <a href="/blog/{{ $post->id }}/edit" class="btn btn-outline-primary">Edit Post</a>
                <br><br>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete Post</button>
                </form>
            <!-- </div>
            <div class="col-12 pt-2">
                <a href="/blog" class="btn btn-outline-primary btn-sm">Go back</a>
                <h1 class="display-one">{{ ucfirst($post->name) }}</h1>
                <p>{!! $post->name  !!}</p> 
                <p>{!! $post->description, $post->user_id, $post->valuation  !!}</p> 
               
            </div> -->
        </div>
    </div>
@endsection