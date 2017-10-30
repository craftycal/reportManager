@extends('layouts/app') 
@section('content')
<div class="landingBackground">
  <div class="loginMenu">
    <br>
    <img class="logo" src="../public/images/RM.png" alt="">
    <h1>
      Report Manager
    </h1>
    <form action="" method="post">
      <div class="input-group">
        <input placeholder="username" type="text" name="username" class="form-control"  value=""> <br>
        <input placeholder="password" type="password" name="password" class="form-control" > <br>
        <input type="submit" name="loginForm" value="sign in" class="button"> <br><br>
      </div>
    </form>
  </div>
</div>
@endsection





