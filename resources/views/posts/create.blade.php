@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Post</div>

                @guest

                <p style="padding: 30px">Log in to add stuff, yo!</p>

                @else

                <div class="panel-body">

                    {!! Form::model($post, ['action' => 'PostsController@store', 'files' => true]) !!}

                        <div class="form-group">
                          {!! Form::label('title', 'Title') !!}
                          {!! Form::text('title', '', ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                          {!! Form::label('image', 'Image') !!}
                          {!! Form::text('image', '', ['class' => 'form-control']) !!}
                        </div>

                        <button class="btn btn-success" type="submit">Submit post</button>

                    {!! Form::close() !!}

                </div>

                @endguest

            </div>
        </div>
    </div>
</div>
@endsection