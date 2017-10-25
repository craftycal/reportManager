<?php date_default_timezone_set("Pacific/Auckland") ?>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class=" m-b-md">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                    <div class="title m-b-md">
                        Test Page
                    </div>

                    <div class="links">
                        <a href="{{ url('/') }}">Default</a>
                        <a href="{{ url('posts/create') }}">Test Entries</a>
                        <a href="{{ url('/chart') }}">Chart</a>
                        <!-- <a href="https://laracasts.com">Laracasts</a>
                        <a href="https://laravel-news.com">News</a>
                        <a href="https://forge.laravel.com">Forge</a>
                        <a href="https://github.com/laravel/laravel">GitHub</a> -->
                    </div>
                    <br>

                    @if (\Session::has('success'))
                        <div class="alert alert-danger" style="width: 30%; margin: 0 auto">
                            <h4>{{ \Session::get('success') }}</h4>
                        </div>
                    @endif

                    @foreach ($posts as $post)

                    <div class="m-b-md" style="width: 40%; margin: 0 auto">
                        <h3>{{ $post->title }}</h3>
                        <p>{{ $post->excerpt }}</p>
                        <img src="{{ asset('storage/'. $post->image) }}" width="50%" />
                        <p>Uploaded: {{ $post->created_at }} </p>
                        {{ $post->body }}
                        <br>

                        @if ((Auth::check()) && (auth()->user()->id ==$post->author_id))

                            <div style="display: inline-block; margin: 10px">

                                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::button('<i class="glyphicon glyphicon-trash"></i> Delete', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
                                {!!Form::close() !!}

                            </div>

                            <div style="display: inline-block; margin: 10px"">

                                <a href="{{ url('/posts/edit/'.$post->id) }}" class="btn btn-default"><i class="glyphicon glyphicon-ok"></i> Edit</a>

                            </div>
                        @else

                        @endif

                    </div>

                    <hr width="5%">

                    @endforeach

            </div>
        </div>
    </body>
</html>