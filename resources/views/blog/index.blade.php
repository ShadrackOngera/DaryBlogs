@extends('layouts.app')
@section('content')
    <div class="blogs-banner">
        <div class="container text-white">
            <div class="text-center text-uppercase">
                <h1 class="py-5">Blog Posts</h1>
                <p>
                    | Easily get posts by your favorite writers |
                </p>
            </div>
        </div>
    </div>
    <div class="py-2"></div>
    @if(session()->has('message'))
        <div class="alert alert-success position-absolute top-0 start-50 translate-middle-x w-75 mt-5 text-center" role="alert">
            {{ session()->get('message') }}
        </div>
    @endif

    @if(Auth::check())
        <div>
            <div class="container mb-3 align-self-center">
                <div class="position-relative py-5">
                    <div class="position-absolute top-50 start-50 translate-middle col-sm-4">
                        <a href="/blog/create" class="btn btn-info text-white w-100">
                            Create Post
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div>
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-sm-6 mb-5">
                    <div class="card shadow h-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h3 class="mb-4 text-capitalize">{{ $post->title }}</h3>
                                <p class="line-limit text-muted mb-4">
                                    {{ $post->description }}
                                </p>
                            </div>
                            <div class="">
                                <div class="text-muted d-flex justify-content-between align-items-center mb-3">
                                    <small class="text-capitalize">~{{ $post->user->name }}</small>
                                    <small>{{ date('jS M Y', strtotime($post->updated_at)) }}</small>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            @if($post->liked())
                                                    <form action="{{ route('unlike.post', $post->id) }}"
                                                          method="post">
                                                        @csrf
                                                        <button class="{{ $post->liked() ? 'block' : 'hidden'  }} btn btn-outline-secondary text-orange me-2 ">
                                                            unlike
                                                        </button>
                                                    </form>
                                            @else
                                                    <form action="{{ route('like.post', $post->id) }}"
                                                          method="post">
                                                        @csrf
                                                        <button class="{{ $post->liked() ? 'bg-blue-600' : '' }} btn btn-outline-secondary text-orange me-2">
                                                            like
                                                        </button>
                                                    </form>
                                            @endif
                                        </div>
                                        <span class="badge text-bg-secondary">{{ $post->likeCount }}</span>
                                    </div>
                                </div>

                                <a href="/blog/{{ $post->slug }}" class="btn btn-primary text-white nav-link mb-3">Read more</a>
                                @if(isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                                    <div class="row">
                                        <div class="col-sm-6 mb-3">
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
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
@endsection
