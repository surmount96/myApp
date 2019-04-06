@extends('layout.app')

@section('content')
    <section class="new-post">
        <div class="col-md-6 offset-4">
            <header>
                <h3 class="display-4">What do you have to say?</h3>
            </header>
            <form action="">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="new-post" id="new-post" rows="5" class="form-control" placeholder="Your Post"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>
    </section>
    <section class=" posts">
        <div class="col-md-6 offset-4">
            <header>
                <h3>What other people say.....</h3>
            </header>
            <article class="post">
                <p class="lead">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae dolores quibusdam error nemo qui eaque provident, obcaecati debitis culpa veritatis magni dolorem nisi quam odio vitae, voluptate doloremque rem facere?
                </p>
                <div class="info">
                    Posted by Max  on 12th feb 2019
                </div>
                <div class="interaction">
                    <a href="#">Like </a>|
                    <a href="#">Dislike </a>|
                    <a href="#">Edit </a>|   
                    <a href="#">Delete</a>
                </div>
            </article><br>
            <article class="post">
                <p class="lead">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae dolores quibusdam error nemo qui eaque provident, obcaecati debitis culpa veritatis magni dolorem nisi quam odio vitae, voluptate doloremque rem facere?
                </p>
                <div class="info">
                    Posted by Max  on 12th feb 2019
                </div>
                <div class="interaction">
                    <a href="#">Like </a>|
                    <a href="#">Dislike </a>|
                    <a href="#">Edit </a>|   
                    <a href="#">Delete</a>
                </div>
            </article>
        </div>
    </section>
@endsection