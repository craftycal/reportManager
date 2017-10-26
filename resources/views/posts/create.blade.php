@include('inc.topBar')
@include('inc.sideBar')
@include('Modals.chartModal')
@include('Modals.tableModal')
@include('Modals.newReportHelperModal')
@extends('layouts/app') 
@section('content')
  <div class="content">
    <div class="newReport">
      <div class="contentPanel col-xs-10 col-xs-offset-1" style="min-height: 500px;">
        <h2>New Report</h2>
        <div class="helpPopButton" data-toggle="modal" data-target="#newReportHelperModal">
          <p><b>?</b></p>
        </div>
        <div class="row">
          <div class="col-xs-8 col-xs-offset-1">
            
            
<?php print(file_get_contents('../resources/views/inc/richText.blade.php')); ?>
            
            <form class="newReportForm" action="#" method="post">
              <div class="fixedCells">
                {!! Form::open(['actiion' => 'PostsController@store', 'method' => 'POST']) !!}
                
                <div class="mui-textfield mui-textfield--float-label">
                  {{form::text('title', '', ['class' => ''] )}}            
                  {{form::label('tilte', 'Title')}}
                </div>  
                <div class="mui-textfield mui-textfield--float-label">
                  {{form::textarea('description', '', ['class' => ''] )}}            
                  {{form::label('description', 'Description')}}
                </div>  
                
                {!! Form::close() !!}
                
                
                
              </div>
              <div class="group"> 
                <input class="submitButton button" type="submit" name="" value="submit">
              </div>
            </form>
          </div>
          <div class="col-xs-1 col-xs-offset-1">
            <div class="toolsList">
              <ul>
                <li><button class="add_heading" type="button" name="button"><i class="fa fa-header" aria-hidden="true"></i> <sup><b>+</b></sup></button></li><br>
                <li><button class="add_form_field" type="button" name="button">text <sup><b>+</b></sup></button></li><br>
                <li><button class="add_image "type="button" name="button"><i class="fa fa-picture-o" aria-hidden="true"></i> <sup><b>+</b></sup></button></li><br>
                <li><button type="button" name="button" data-toggle="modal" data-target="#chartModal"><i class="fa fa-bar-chart" aria-hidden="true"></i> <sup><b>+</b></sup></button></li><br>
                <li><button type="button" name="button" data-toggle="modal" data-target="#tableModal"><i class="fa fa-table" aria-hidden="true"></i> <sup><b>+</b></sup></button></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

