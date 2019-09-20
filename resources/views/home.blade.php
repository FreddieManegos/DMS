{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
	<div class="row">
		<div class="col-md-6">
			<input class="form-control" type="text" placeholder="Search Files Here!">
		</div>
	</div>
	<div class="row" style="margin-top: 20px;">
		<div class="col-md-4">
		    <div class="info-box">
		        <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
		            <div class="info-box-content">
		              <span class="info-box-text">CPU Traffic</span>
		              <span class="info-box-number">90<small>%</small></span>
		            </div>
		            <!-- /.info-box-content -->
		    </div>
	    </div>
	    <div class="col-md-4">
		    <div class="info-box">
		        <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
		            <div class="info-box-content">
		              <span class="info-box-text">CPU Traffic</span>
		              <span class="info-box-number">90<small>%</small></span>
		            </div>
		            <!-- /.info-box-content -->
		    </div>
	    </div>
	    <div class="col-md-4">
		    <div class="info-box">
		        <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
		            <div class="info-box-content">
		              <span class="info-box-text">CPU Traffic</span>
		              <span class="info-box-number">90<small>%</small></span>
		            </div>
		            <!-- /.info-box-content -->
		    </div>
	    </div>
    </div>



    <div class="row">
    	<div class="col-md-12">
    		<table id="myTable" class="display" >
				<button class="btn btn-success">+ Add File</button>
			    <thead>
			        <tr>
			            <th>Name</th>
			            <th>Decription</th>
			            <th>Date</th>
			            <th>Uploader</th>
			            <th>Action</tr>
			        </tr>
			    </thead>
			    <tbody>
			        <tr>
			            <td>Row 1 Data 1</td>
			            <td>Row 1 Data 2</td>
			            <td>Row 1 Data 1</td>
			            <td>Row 1 Data 2</td>
			            <td>Row 1 Data 1</td>
			        </tr>
			    </tbody>
			</table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  	<style type="text/css">
  		#myTable_wrapper {
  			background-color: white;
  			padding:10px;
  		}
  	</style>
@stop

@section('js')
  
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script>
    	$(document).ready( function () {
   			 $('#myTable').DataTable();
		} );
    </script>
@stop