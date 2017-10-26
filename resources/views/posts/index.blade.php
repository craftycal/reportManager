@include('inc.topBar')
@include('inc.sideBar')
@extends('layouts/app') 
@section('content')
  
  @if(count($posts) > 0)
    
    <div class="content">
      @foreach($posts as $post)
        <div class="contentPanel col-xs-10 col-xs-offset-1">
          <div class="row">
            <div class="col-xs-6">
              <h2>{{ $post->title }}</h2>
            </div>
            <div class="col-xs-6 pull-right date">
              <h4>{{ $post->created_at }}</h4>
            </div>
            <div class="col-xs-12">
              <p>
                {{ $post->description }}
              </p>
              <a class="button pull-right" href="posts/{{$post->id}}">View Report</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    
  @else
    <p>no reports found</p>
  @endif
  
@endsection


