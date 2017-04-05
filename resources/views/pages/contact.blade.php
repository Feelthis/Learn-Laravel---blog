@extends('main')
@section('title', '| Contact')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Contact Me</h1>
            <hr>
            <form action="">
                <div class="form-group">
                    <label name="email">Email:</label>
                    <input id='email' type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label name="subject">Subject:</label>
                    <input id='subject' type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label name="message">Message:</label>
                    <textarea id='message' type="text" class="form-control">Type your message here...</textarea>
                </div>

                <input type="submit" value="Send message" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection