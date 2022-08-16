@extends('layouts.app')
@section('content')
    <div>
        <div class="container">
            <div class="text-center text-uppercase">
                <h1>Blog Posts</h1>
            </div>
        </div>
    </div>
    <div class="py-5"></div>
    @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('message') }}
        </div>
    @endif

    @if(Auth::check())
        <div>
            <div class="container">
                <a href="/blog/create" class="btn btn-primary text-white">
                    Create Post
                </a>
            </div>
        </div>
    @endif

    <div>
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-sm-6">
                    <h2 class="mb-3">{{ $post->title }}</h2>
                    <small class="mb-5">By <strong class="">{{ $post->user->name }}</strong>,on {{ date('jS M Y', strtotime($post->updated_at)) }}</small>
                    <p>
                        {{ $post->description }}
                    </p>
                    <a href="/blog/{{ $post->slug }}" class="btn btn-primary text-white nav-link">Read more</a>
                    @if(isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                        <a href="/blog/{{ $post->slug }}/edit" class="btn btn-primary">
                            Edit
                        </a>
                    @endif
                    <div>
                        <form action="/blog/{{ $post->slug }}" method="POST">
                            @csrf
                            @method('delete')

                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
