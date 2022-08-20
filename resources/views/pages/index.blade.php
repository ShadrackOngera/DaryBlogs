{{--0772492012--}}
@extends('layouts.app')
@section('content')
    <div class="home-banner">
        <div class="container">
            <div class="text-indigo text-center">
                <h1 class="display-4 py-5">Become a renowned blogger</h1>
                <button class="btn btn-indigo align-self-center px-5">
                    <a href="/blog" class="nav-link text-white">View Blogs</a>
                </button>
                @if(Auth::check())
                    <div>
                        <div class="container mb-3 align-self-center">
                            <div class="position-relative py-5">
                                <div class="position-absolute top-50 start-50 translate-middle col-sm-4">
                                    <a href="/blog/create" class="nav-link create-home text-indigo w-100 py-1">
                                        CREATE POST
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="py-5"></div>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="https://cdn.pixabay.com/photo/2018/01/24/17/33/light-bulb-3104355__340.jpg" alt="..." class="img-fluid rounded-4">
                </div>
                <div class="col-sm-6 align-self-center">
                    <h2>Defination</h2>
                    <p>
                        A blog (a shortened version of “weblog”) is an online journal or informational website displaying information in reverse chronological order, with the latest posts appearing first, at the top.
                    </p>
                    <p>
                        It is a platform where a writer or a group of writers share their views on an individual subject.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5"></div>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 order-2">
                    <img src="https://cdn.pixabay.com/photo/2018/01/24/17/33/light-bulb-3104355__340.jpg" alt="..." class="img-fluid rounded-4">
                </div>
                <div class="col-sm-6 align-self-center order-1">
                    <h2>Daryblogs</h2>
                    <p>
                        Science, crime, medicine, archaeology, nature — if it’s interesting news, you’ll find it here. Stories like these may not always be
                        the ones atop your news feed, but chances are they’re the ones you’ll actually want to read. Whether it’s stories of weird animals,
                        grisly crimes, interstellar drama, or the just plain unbelievable, these are the most interesting articles.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5"></div>

    <div class="bg-dark text-white">
        <div class="py-3"></div>
        <div class="container text-center">
            <h6>Become an Expert in...</h6>
            <h4>Blogging</h4>
            <h4>Story telling</h4>
            <h4>Creative Writing</h4>
        </div>
        <div class="py-3"></div>
    </div>
    <div class="py-5"></div>

    <div>
        <div class="container">
            <div class="text-center text-muted text-uppercase mb-5">
                <h3>Recent Blogs</h3>
            </div>
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h4 class="py-3">The growth of this market</h4>
                            <p class="text-muted mb-5">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aut delectus iste minima voluptatem? Adipisci asperiores commodi debitis deleniti facere impedit, iste nesciunt numquam odit pariatur, placeat quos sunt ullam!
                            </p>
                            <small class="text-muted">Naomi Shabaan</small>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <h4 class="py-3">Madaraka express</h4>
                            <p class="text-muted mb-5">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aut delectus iste minima voluptatem? Adipisci asperiores commodi debitis deleniti facere impedit, iste nesciunt numquam odit pariatur, placeat quos sunt ullam!
                            </p>
                            <small class="text-muted">Naomi Shabaan</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
