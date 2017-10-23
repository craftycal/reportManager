@include('inc.topBar')
@include('inc.sideBar')
@extends('layouts/app') 
@section('content')
<div class="content">
  <div class="newReport">
    
    <div class="contentPanel col-xs-10 col-xs-offset-1" style="min-height: 500px;">
      <h2>New Report</h2>
      
      <div class="helpPopButton" data-toggle="modal" data-target="#myModal">
        <p><b>?</b></p>
      </div>
      <!-- Modal -->
      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">New Report Helper</h4>
            </div>
            <div class="modal-body">
              <p>Some text in the modal. <i class="fa fa-trash-o" aria-hidden="true"></i></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class=" col-xs-10">
          <form class="newReportForm" action="index.html" method="post">
            <div class="group">      
              <input type="text" required>
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Title</label>
            </div>
            <div class="group">      
              <input type="text" required>
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Date</label>
            </div>
          </form>
        </div>
        <div class="col-xs-1">
          <div class="toolsList">
            <ul>
              <li><button class="add_heading" type="button" name="button"><i class="fa fa-header" aria-hidden="true"></i> <sup><b>+</b></sup></button></li><br><br>
              <li><button class="add_form_field" type="button" name="button">text <sup><b>+</b></sup></button></li><br><br>
              <li><button class="add_image "type="button" name="button"><i class="fa fa-picture-o" aria-hidden="true"></i> <sup><b>+</b></sup></button></li><br><br>
              <li><button type="button" name="button"><i class="fa fa-bar-chart" aria-hidden="true"></i> <sup><b>+</b></sup></button></li><br><br>
              <li><button type="button" name="button"><i class="fa fa-table" aria-hidden="true"></i> <sup><b>+</b></sup></button></li>
            </ul>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>



<script>
$(document).ready(function() {
  var max_fields      = 100;
  var wrapper         = $(".newReportForm");
  var add_button_textarea      = $(".add_form_field");
  var add_heading      = $(".add_heading");
  var add_image      = $(".add_image");
  
  var x = 1;
  $(add_button_textarea).click(function(e){
    e.preventDefault();
    if(x < max_fields){
      x++;
      $(wrapper).append('<div class="group"><input type="text" required><span class="highlight"></span><span class="bar"></span><label>text box</label><a href="#" class="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>');
    }
  });
  
  $(add_heading).click(function(e){
    e.preventDefault();
    if(x < max_fields){
      x++;
      $(wrapper).append('<div class="group"><input type="text" required><span class="highlight"></span><span class="bar"></span><label>heading</label><a href="#" class="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>'); //add input box
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
      $(wrapper).append('<div><input type="file" name="pic" accept="image/*"><a href="#" class="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>'); //add input box
    }
  });
  
  
  
  $(wrapper).on("click",".delete", function(e){
    e.preventDefault(); $(this).parent('div').remove(); x--;
  })
});
</script>

@endsection

