@extends('main')

@section('title', '| Homepage')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome, {{ Auth::user() ? Auth::user()->name : "username"}} to my Blog!</h1>
                <p class="lead">Thank you so much for visiting. This is my test website buikt with Laravel. Please read
                    my latest post!</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Latest Post</a></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            
            @foreach($posts as $post)

            <div class="post">
                <h3>{{$post->title}}</h3>
                <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : ""}}</p>
                <a href="{{ url('blog/'. $post->slug) }}" class="btn btn-primary">Read more</a>
            </div>

            <hr>

            @endforeach

        </div>

        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>

    </div>
@endsection

