@extends('layouts.admin_layout')

@section('page_title')
    <title>BFMS Season Details</title>
    @endsection
@section('title')
    <h1 class="m-0 text-dark">Season Details:</h1>
    @endsection
@section('breadcrumb_list')
    <li class="breadcrumb-item active">Season</li>
    @endsection
@section('content')
	<!-- Main content -->
   <section class="content">
	 <div class="container-fluid">
	   <div class="row">
		 <!-- left column -->
		 <div class="col-md-6">
		   <!-- general form elements -->
		   <div class="card card-warning">
			 <div class="card-header">
			   <h3 class="card-title">Season Title : Summer 
			 </div>
			 <!-- /.card-header -->
			 <!-- form start -->
			 <form role="form">
			   <div class="card-body">
				 <div class="form-group">
				   <label for="startTime">Start Time :</label>
				 </div>
				 <div class="form-group">
				   <label for="endTime">End Time :</label>
				 </div>
				 <div class="form-group">
				   <label for="budget">Budget :</label>
			   </div>
			   <div class="form-group">
				 <label for="status" style="color:red">Status :</label>
			 </div>
			   <!-- /.card-body -->
			   <div class="card-footer">
 				<button type="submit" class="btn btn-primary">Submit</button>
 			  </div>
			 </form>
		   </div>
		   <!-- /.card -->
		   <!-- /.row -->
	     </div>
		</div>

  		<!-- Season card 2-->
		<div class="col-md-6">
		  <!-- general form elements -->
		   <div class="card card-warning">
			<div class="card-header">
			  <h3 class="card-title">Season Title : Summer</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form role="form">
			  <div class="card-body">
				<div class="form-group">
				  <label for="startTime">Start Time :</label>
				</div>
				<div class="form-group">
				  <label for="endTime">End Time :</label>
				</div>
				<div class="form-group">
				  <label for="budget">Budget :</label>
			  </div>
			  <div class="form-group">
				<label for="status" style="color:red">Status :</label>
			</div>
			  <!-- /.card-body -->

			  <div class="card-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
			  </div>
			</form>
		  </div>
		  <!-- /.card -->
		  <!-- /.row -->
		</div>
	   </div>
	   </div><!-- /.container-fluid -->
	 </section>
    @endsection
