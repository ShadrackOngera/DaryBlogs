@extends('layouts.app')
@section('content')
    <div>
        <div class="container">
            <div class="text-center text-uppercase">
                <small>article</small>
                <h2>{{ $post->title }}</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <small class="mb-5">By <strong class="">{{ $post->user->name }}</strong>,on {{ date('jS M Y', strtotime($post->updated_at)) }}</small>
        <p>
            {{ $post->description }}
        </p>
    </div>
    <div></div>
@endsection
