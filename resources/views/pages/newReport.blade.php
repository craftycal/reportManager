@include('inc.topBar')
@include('inc.sideBar')
@include('Modals.chartModal')
@include('Modals.tableModal')
@include('Modals.newReportHelperModal')
@extends('layouts/app') 
@section('content')
  
  
  <div class="row">
    <div class="col-xs-11">
      
      <div class="contentPanel">
      <div class="row">
      <div class="col-xs-10">
          <h2>New Report</h2>
          <form class="" action="index.html" method="post" class="overflow-y">
            <div class="newReportForm">
              <div class="mui-textfield mui-textfield--float-label">
                <input type="text"></input>
                <label>Title</label>
              </div>
              <div class="mui-textfield mui-textfield--float-label">
                <textarea type="textara"></textarea>
                <label>Description</label>
              </div>
              {{-- <div class="editor-container"></div> --}}
            </div>
          
              
            <div class="group"> 
              <input class="submitButton button" type="submit" name="" value="submit">
            </div>
          </form>
        </div>  
      <div class="col-xs-2">
        <div class="toolsList">
          <ul>
            <li><button class="add_heading" type="button" name="button"><i class="fa fa-header" aria-hidden="true"></i> <sup><b>+</b></sup></button></li><br>
            <li><button class="add_textarea" type="button" name="button">text <sup><b>+</b></sup></button></li><br>
            <li><button class="add_image "type="button" name="button"><i class="fa fa-picture-o" aria-hidden="true"></i> <sup><b>+</b></sup></button></li><br>
            <li><button type="button" name="button" data-toggle="modal" data-target="#chartModal"><i class="fa fa-bar-chart" aria-hidden="true"></i> <sup><b>+</b></sup></button></li><br>
            <li><button type="button" name="button" data-toggle="modal" data-target="#tableModal"><i class="fa fa-table" aria-hidden="true"></i> <sup><b>+</b></sup></button></li>
          </ul>
        </div>
        
      </div>
      </div>
      </div>
      
      

  
  
@endsection

