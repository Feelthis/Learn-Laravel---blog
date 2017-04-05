@extends('main')

@section('title', '| Homepage')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to my Blog!</h1>
                <p class="lead">Thank you so much for visiting. This is my test website buikt with Laravel. Please read
                    my latest post!</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Latest Post</a></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, assumenda consequuntur deleniti
                    distinctio doloremque, ducimus et facilis fugit illo necessitatibus officia optio porro quidem
                    ratione repellat sunt totam unde voluptatum!</p>
                <a href="" class="btn btn-primary">Read more</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, assumenda consequuntur deleniti
                    distinctio doloremque, ducimus et facilis fugit illo necessitatibus officia optio porro quidem
                    ratione repellat sunt totam unde voluptatum!</p>
                <a href="" class="btn btn-primary">Read more</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, assumenda consequuntur deleniti
                    distinctio doloremque, ducimus et facilis fugit illo necessitatibus officia optio porro quidem
                    ratione repellat sunt totam unde voluptatum!</p>
                <a href="" class="btn btn-primary">Read more</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, assumenda consequuntur deleniti
                    distinctio doloremque, ducimus et facilis fugit illo necessitatibus officia optio porro quidem
                    ratione repellat sunt totam unde voluptatum!</p>
                <a href="" class="btn btn-primary">Read more</a>
            </div>
        </div>

        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>
    </div>
@endsection

