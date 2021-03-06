@extends('main')
@section('title', '| Edit Blog Post')

@section('content')

    <div class="row">
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method'=> 'PUT']) !!}

        <div class="col-md-8">

            {{ Form::label('title', 'Заголовок:') }}
            {{ Form::text('title', null, ['class'=> 'form-control input-lg']) }}

            {{ Form::label('slug', 'Slug:', ['class'=> 'form-spacing-top']) }}
            {{ Form::text('slug', null, ['class' => 'form-control']) }}

            {{ Form::label('body', "Текст блога:", ['class'=>'form-spacing-top']) }}
            {{ Form::textarea('body', null, ['class'=> 'form-control']) }}

        </div>

        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{ date('M j, Y H:i', strtotime($post->created_at)) }}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{ date('M j, Y H:i', strtotime($post->updated_at)) }}</dd>
                    {{--<dd>{{ $updated_at_ago }}</dd>--}}
                </dl>

                <hr>

                <div class="row">
                    <div class="row">

                        <div class="col-sm-6">
                            {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class'=>'btn btn-danger btn-block')) !!}
                        </div>
                        <div class="col-sm-6">
                            {{ Form::submit('Save changes', ['class'=> 'btn btn-success btn-block']) }}
                            {{--{!! Html::linkRoute('posts.update', 'Save Changes', array($post->id), array('class'=>'btn btn-success btn-block')) !!}--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {!! Form::close() !!}
    </div>

@endsection
