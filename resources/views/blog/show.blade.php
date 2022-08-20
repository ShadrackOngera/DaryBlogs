@extends('layouts.app')
@section('content')
    <div class="banner-show">
        <div class="container">
            <div class="text-center text-uppercase align-self-center">
                <h2 class="text-white py-5">{{ $post->title }}</h2>
                <hr>
            </div>
        </div>
    </div>
    <div class="container">
        <small class="mb-5">By <strong class="">{{ $post->user->name }}</strong>,on {{ date('jS M Y', strtotime($post->updated_at)) }}</small>
        <hr>
        <pre class="mb-3">
            {{ $post->description }}
        </pre>
        <div class="d-grid gap-2 col-6 mx-auto">
            <a href="/blog" class="btn btn-info text-white">Back</a>
        </div>
    </div>
    <div></div>
@endsection
