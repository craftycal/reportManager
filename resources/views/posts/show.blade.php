@include('inc.topBar')
@include('inc.sideBar')
@extends('layouts/app') 
@section('content')
  
  <div class="row">
    <div class="col-xs-10">
      <div class="contentPanel reportView">
        
      <h2>{{ $post->title }}</h2>
      <h4>{{ $post->created_at }}</h4>
      <p>
        {{ $post->description }}
      </p>
      </div>
    </div>
    <div class="col-xs-2">
      <div class="contentPanel">
        <h5>headings</h5>
        <a href="#">headings 1</a><br>
        <a href="#">headings 2</a><br>
        <a href="#">headings 3</a><br>
        <a href="#">headings 4</a><br>
        <a href="#">headings 5</a><br>
        <a href="#">headings 6</a><br>
        <a href="#">headings 7</a><br>
        <a href="#">headings 8</a><br>
        <a href="#">headings 9</a><br>
      </div>      
    </div>  
  </div>

  
  
  
@endsection

