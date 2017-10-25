@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Add Post</h4></div>

                @guest

                <p style="padding: 30px">Log in to add stuff, yo!</p>

                @else

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br>
                @endif

                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div><br>
                @endif

                <div class="panel-body"> 
                    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'files' => true]) !!}
                     <div class="form-group">
                          {{Form::label('title', 'Title')}}
                          {{Form::text('title', ['class' => 'form-control'])}}
                     </div>
                     <div class="form-group">
                          {{Form::label('excerpt', 'Excerpt')}}
                          {{Form::text('excerpt', ['class' => 'form-control'])}}
                     </div>
                     <div class="form-group">
                          {{Form::label('body', 'Body')}}
                          {{Form::textarea('body', ['class' => 'form-control'])}}
                     </div>
                     <div class="form-group">
                          {{Form::label('slug', 'Slug')}}
                          {{Form::text('slug', ['class' => 'form-control'])}}
                     </div>
                     <div class="form-group">
                          {{Form::label('image', 'Image')}}
                          {{Form::file('image')}}
                     </div>
                     {{Form::hidden( 'author_id', Auth::id() )}}
                     {{Form::submit('Create Post', ['class' => 'btn btn-primary'])}}
                  {!! Form::close() !!} 
                  <!-- <form method="post" action="{{url('post')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title">
                      </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                          <label for="excerpt">Excerpt:</label>
                          <input type="text" class="form-control" name="excerpt">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                          <label for="body">Body:</label>
                          <input type="text" class="form-control" name="body">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                          <label for="slug">Slug:</label>
                          <input type="text" class="form-control" name="slug">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                          <label for="image">Image:</label>
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
                        <button type="submit" class="btn btn-success">Submit post</button>
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