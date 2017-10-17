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

                    {!! Form::open(['url' => '/testEntries', 'method' => 'POST', 'files' => true]) !!}

                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        <label for="title" class="col-md-4 control-label">Title</label>

                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control" title="title" required autofocus>

                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <br><br><br>
                    <div class="form-group{{ $errors->has('excerpt') ? ' has-error' : '' }}">
                        <label for="excerpt" class="col-md-4 control-label">Excerpt</label>

                        <div class="col-md-6">
                            <input id="excerpt" type="text" class="form-control" name="excerpt" required>

                            @if ($errors->has('excerpt'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('excerpt') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                        <label for="body" class="col-md-4 control-label">Body</label>

                        <div class="col-md-6">
                            <input id="body" type="text" class="form-control" name="body" required>

                            @if ($errors->has('body'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                        <label for="image" class="col-md-4 control-label">Image</label>

                        <div class="col-md-6">
                            <input id="image" type="image" class="form-control" name="image" required>

                            @if ($errors->has('image'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <br><br>
                    {!! Form::close() !!}

                </div>

                @endguest

            </div>
        </div>
    </div>
</div>
@endsection