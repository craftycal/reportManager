@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Edit Post</h4></div>

                @guest

                  <p style="padding: 30px">Log in to edit posts</p>

                @else

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div>
                @endif

                <div class="panel-body">
                  {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'files' => true]) !!}
                     <div class="form-group">
                          {{Form::label('title', 'Title')}}
                          {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                     </div>
                     <div class="form-group">
                          {{Form::label('excerpt', 'Excerpt')}}
                          {{Form::text('excerpt', $post->excerpt, ['class' => 'form-control'])}}
                     </div>
                     <div class="form-group">
                          {{Form::label('body', 'Body')}}
                          {{Form::textarea('body', $post->body, ['class' => 'form-control'])}}
                     </div>
                     <div class="form-group">
                          {{Form::label('slug', 'Slug')}}
                          {{Form::text('slug', $post->slug, ['class' => 'form-control'])}}
                     </div>
                     <div class="form-group">
                          {{Form::label('image', 'Current image')}}
                          <br>
                          <img src="{{ asset('storage/'. $post->image) }}" width="30%" />
                          <br>
                          <br>
                          {{Form::file('image')}}
                     </div>
                     {{Form::hidden('_method', 'PUT')}}
                     {{Form::hidden( 'author_id', Auth::id() )}}
                     {{Form::button('<i class="glyphicon glyphicon-ok"></i> Edit Post', array('type' => 'submit', 'class' => 'btn btn-success'))}}
                  {!! Form::close() !!} 
                  <!-- <form method="POST" action="{{ url('edit') }}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                      <div class="form-group col-md-8">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                      </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-8">
                          <label for="excerpt">Excerpt:</label>
                          <input type="text" class="form-control" name="excerpt" value="{{ $post->excerpt }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-8">
                          <label for="body">Body:</label>
                          <input type="text" class="form-control" name="body" value="{{ $post->body }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-8">
                          <label for="slug">Slug:</label>
                          <input type="text" class="form-control" name="slug" value="{{ $post->slug }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                          <label for="image">Image:</label>
                          <img src="{{ asset('storage/'. $post->image) }}" width="70%" />
                          <br><br>
                          <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-8 hidden">
                          <input type="integer" class="form-control" name="author_id" value="{{ Auth::id() }}">
                        </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-8">
                        <button type="submit" class="btn btn-success" value="{{ $post->id }}">Submit edit</button>
                      </div>
                    </div>
                  </form> -->
                </div>

                @endguest

            </div>
        </div>
    </div>
</div>
@overwrite