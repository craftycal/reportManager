@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  Chart
                </div>
                <div class="panel-body">
                  <canvas id="myChart" width="400" height="160"></canvas>
                  <br>
                  <canvas id="myChart2" width="400" height="160"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection