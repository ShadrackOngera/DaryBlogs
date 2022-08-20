@extends('layouts.app')
@section('content')
    <div class="blogs-banner">
        <div class="container text-white">
            <div class="text-center text-uppercase">
                <h1 class="py-5">Blog Posts</h1>
                <p>
                    Easily get posts by your favorite writers
                </p>
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
                <div class="col-sm-6 mb-5">
                    <div class="card shadow">
                        <div class="card-body">
                            <h3 class="mb-4 text-capitalize">{{ $post->title }}</h3>
                            <p class="line-limit text-muted mb-4">
                                {{ $post->description }}
                            </p>
                            <div class="mb-4 text-muted d-flex justify-content-between">
                                <small class="text-capitalize">~{{ $post->user->name }}</small>
                                <small>{{ date('jS M Y', strtotime($post->updated_at)) }}</small>
                            </div>
                            <a href="/blog/{{ $post->slug }}" class="btn btn-primary text-white nav-link mb-3">Read more</a>
                            @if(isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="d-grid gap-2">
                                            <a href="/blog/{{ $post->slug }}/edit" class="btn btn-primary text-white">
                                                Edit
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <form action="/blog/{{ $post->slug }}" method="POST">
                                            @csrf
                                            @method('delete')

                                            <div class="d-grid gap-2">
                                                <button class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
