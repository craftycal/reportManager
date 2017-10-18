@include('inc.topBar')
@include('inc.sideBar')
@extends('layouts/app') 
@section('content')
<div class="content">
  <div class="newReport">
    
    <div class="contentPanel col-xs-10 col-xs-offset-1">
      <h2>New Report</h2>
      <form class="" action="index.html" method="post">
        <input type="text" name="" value="title">
        <input type="text" name="" value="date">
        <p id="addcap">add:</p>
        <div class="toolsList">
          
          
          <ul>
            <li><button class="add_form_field" type="button" name="button">text</button></li>
            <li><button class="add_heading" type="button" name="button">heading</button></li>
            <li><button class="add_image "type="button" name="button">image</button></li>
            <li><button type="button" name="button">chart</button></li>
            <li><button type="button" name="button">table</button></li>
          </ul>
        </div>
        
      </form>
    </div>
  </div>
</div>

  

<script>
$(document).ready(function() {
  var max_fields      = 100;
  var wrapper         = $(".toolsList");
  var add_button_textarea      = $(".add_form_field");
  var add_heading      = $(".add_heading");
  var add_image      = $(".add_image");
  
  var x = 1;
  $(add_button_textarea).click(function(e){
    e.preventDefault();
    if(x < max_fields){
      x++;
      $(wrapper).append('<div><textarea placeholder="text area" type="text" name="mytext[]"/><a href="#" class="delete">Delete</a></div>'); //add input box
    }
  });
  
  $(add_heading).click(function(e){
    e.preventDefault();
    if(x < max_fields){
      x++;
      $(wrapper).append('<div><input placeholder="heading" type="text" name="mytext[]" value=""/><a href="#" class="delete">Delete</a></div>'); //add input box
    }
    else
    {
      alert('You Reached the limits')
    }
  });
  
  $(add_image).click(function(e){
    e.preventDefault();
    if(x < max_fields){
      x++;
      $(wrapper).append('<div><input type="file" name="pic" accept="image/*"><a href="#" class="delete">Delete</a></div>'); //add input box
    }
  });
  
  
  
  $(wrapper).on("click",".delete", function(e){
    e.preventDefault(); $(this).parent('div').remove(); x--;
  })
});
</script>

@endsection

