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
                    <img src="https://cdn.pixabay.com/photo/2014/06/05/22/27/minions-363019__340.jpg" alt="..." class="img-fluid rounded-2 mb-4">
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
                    <img src="https://cdn.pixabay.com/photo/2018/01/24/17/33/light-bulb-3104355__340.jpg" alt="..." class="img-fluid rounded-2">
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
                <h3>Randoms</h3>
            </div>
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <div>
                                <h4 class="py-3">I Have A Dream</h4>
                                <p class="text-muted">
                                    I am happy to join with you today in what will go down in history as the greatest demonstration for freedom in the history of our nation.
                                </p>
                                <p class="text-muted">
                                    Five score years ago, a great American, in whose symbolic shadow we stand today, signed the Emancipation Proclamation. This momentous decree came as a great beacon light of hope to millions of Negro slaves who had been seared in the flames of withering injustice. It came as a joyous daybreak to end the long night of their captivity....
                                </p>
                            </div>
                            <div class="py-4"></div>
                            <div class="py-3"></div>
                            <div class="d-flex justify-content-between bottom-0">
                                <small class="text-muted">~Martin Luther King</small>
                                <small class="text-muted">1963</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <h4 class="py-3">“Spanish Armada” Speech to the Troops at Tilbury</h4>
                            <p class="text-muted">
                                I am come amongst you, as you see, at this time, not for my recreation and disport, but being resolved, in the midst
                                and heat of the battle, to live and die amongst you all; to lay down for my God, and for my kingdom, and my people,
                                my honour and my blood, even in the dust.
                            </p>
                            <p class="text-muted">
                                I know I have the body but of a weak and feeble woman, but I have the heart and
                                stomach of a king, and of a king of England too, and think foul scorn that Parma or Spain, or any prince of Europe,
                                should dare to invade the borders of my realm: To which rather than any dishonour shall grow by me, I myself will take
                                up arms, I myself will be your general, judge, and rewarder of every one of your virtues in the field.
                            </p>
                            <div class="d-flex justify-content-between">
                                <small class="text-muted">~Queen Elizabeth I</small>
                                <small class="text-muted">1588</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
