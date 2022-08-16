@extends('layouts.app')
@section('content')
    <div>
        <div class="container">
            <div class="text-center text-uppercase">
                <h1>Create Blog</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <form action="/blog" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="title" placeholder="Title">
                <label for="floatingInput">Title</label>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Description" name="description" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Description</label>
            </div>
            <button type="submit" class="btn btn-success">
                Submit
            </button>
        </form>
    </div>
    <div></div>
@endsection
