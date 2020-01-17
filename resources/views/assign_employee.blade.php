@extends('layouts.admin_layout')

@section('page_title')
    <title>BFMS Employee</title>
    @endsection
@section('title')
	<div class="card-header">
		<h1>
            <a class="btn btn-primary"  href="#" role="button" style="background-color:green" > <i class="fa fa-plus" aria-hidden="true"></i> ADD New EMPLOYEE DETAILS</a>
         </h1>
	</div>
    @endsection
@section('breadcrumb_list')
    <li class="breadcrumb-item active">Employee</li>
    @endsection
@section('content')
	<section class="content">
      <div class="row">
        <div class="col-12"
          <div class="card">
            <div class="card-header">
				<h3 class="btn btn-primary" style="background-color:ash" >EMPLOYEE DETAILS AND SALARY DETAILS:</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
					<th>Employee Name</th>
  				  <th>Employee Email</th>
  				  <th>Employee Phone</th>
  				  <th>Designation</th>
  				  <th>Salary</th>
  				  <th>Address</th>
  				  <th>Action</th>
  				  <th>Regined</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>InternetExplorer 4.0</td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
				  <td>Win 95+</td>
				  <td> 4</td>
				  <td> 4</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
					<th>Employee Name</th>
                    <th>Employee Email</th>
                    <th>Employee Phone</th>
                    <th>Designation</th>
                    <th>Salary</th>
                    <th>Address</th>
                    <th>Action</th>
                    <th>Regined</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      <!-- /.row -->
    </section>

    @endsection
