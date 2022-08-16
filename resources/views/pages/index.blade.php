{{--0772492012--}}
@extends('layouts.app')
@section('content')
    <div class="home-banner">
        <div class="container">
            <div class="text-indigo text-center">
                <h1 class="display-4 py-5">Become a renowned blogger</h1>
                <button class="btn btn-indigo align-self-center px-5">
                    <a href="/blog" class="nav-link text-white">Blogs</a>
                </button>
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
                    <h2>Hello world</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur consequatur dolorum fugit nemo, qui similique?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque eaque fugiat labore recusandae. Eaque modi officia quis saepe similique veniam?
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
                    <h2>Hello world</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur consequatur dolorum fugit nemo, qui similique?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque eaque fugiat labore recusandae. Eaque modi officia quis saepe similique veniam?
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5"></div>

    <div class="bg-dark text-white">
        <div class="py-3"></div>
        <div class="container text-center">
            <h6>I'm an Expert in...</h6>
            <h4>psychology</h4>
            <h4>Frontend</h4>
            <h4>fullstack</h4>
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
                <div class="col-sm-6">
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
                            <h4 class="py-3">Makadara express</h4>
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
