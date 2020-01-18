@extends('layouts.admin_layout')
@section('public_css')

    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('adminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
    @endsection

@section('page_title')
    <title>BFMS Add Employee</title>
@endsection
@section('title')
    <a class="btn btn-primary"  href="#" role="button"  data-toggle="modal" data-target="#modal-lg"> <i class="fa fa-plus" aria-hidden="true"></i> ADD EMPLOYEE </a>
@endsection
@section('breadcrumb_list')
    <li class="breadcrumb-item active">Employee</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">

            <!-- /.card -->

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">EMPLOYEE DETAILS AND SALARY DETAILS </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Employee Name</th>
                            <th>Employee email</th>
                            <th>Employee Phone</th>
                            <th>Designation</th>
                            <th>Salary</th>
                            <th>Address</th>
                            <th>Action</th>
                            <th>Resigned</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Trident</td>
                            <td>Internet Explorer 4.0 </td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                            <td>Y</td>
                            <td><a class="btn btn-info btn-sm"  href="#" role="button" > <i class="fas fa-edit" ></i>EDIT </a></td>
                            <td><a class="btn btn-danger btn-sm"  href="#" role="button" > <i class="fas fa-trash-alt" ></i>EDIT </a></td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Employee Name</th>
                            <th>Employee email</th>
                            <th>Employee Phone</th>
                            <th>Designation</th>
                            <th>Salary</th>
                            <th>Address</th>
                            <th>Action</th>
                            <th>Resigned</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Employee Modal Form-->
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Employee's Information Here</h4>
                    <button type="button" class="close" data-dismiss= "modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addform">
                        @csrf
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="employeeName :">Employee Name :</label>
                                </div>
                                <div class="error col-md-9">
                                    <input type="text" id="employee_name" class="form-control" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="employeeEmail">Employee email :</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="email" class="form-control"  placeholder="Enter email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="Employee Phone">Employee Phone :</label>
                                </div>
                                <div class="col-md-9">
                                <input type="email" class="form-control"  placeholder="Enter Phone Number">
                                </div>
                           </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="status" >Designation :</label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-control">
                                        <option>Select from here</option>
                                        <option value="">Manager</option>
                                        <option value="">Staff</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="status" >Salary :</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="email" class="form-control"  placeholder="Enter Salary">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="status" >Address :</label>
                                </div>
                                <div class="error col-md-9">
                                    <input type="email" class="form-control"  placeholder="Enter Address">
                                </div>
                            </div>

                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" id="submit" class="btn btn-success" >Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

@endsection
@section('public_js')
    <!-- DataTables -->
    <script src="{{asset('adminLTE/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('adminLTE/dist/js/demo.js')}}"></script>
    <script>
        //to stack all form data in a variable
        function form(){
            formdata = $('#addform');
        }
        // ajax insertion and error handling
        $('#submit').click(function (event) {
            event.preventDefault();
            form();
            $.ajax({
                url : "{{route('addemployee.store')}}",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                data : formdata.serialize(),
                success: function (response) {
                    $('#addform').trigger("reset");
                    $('#modal-lg').modal('hide');
                    $("#msg").css("display", "");
                   // $("#msg").fadeOut(4000);
                   // table.draw();
                },
                error : function (xhr) {
                    var res = xhr.responseJSON;
                   // console.log(res)
                    if ($.isEmptyObject(res) == false) {
                        $.each(res.errors, function (key, value) {
                            //console.log(value)
                            $('#' + key)
                                .closest('.error')
                                .append('<span style="color:red"><strong>' + value + '</strong></span>');
                            $('#' + key)
                                .closest('.form-control')
                                .addClass('is-invalid');
                        });
                    }
                }
            })
        });


        //
        $(function() {
            $("#close").click(function() {
                $('#form').trigger("reset");
                $('#kok').attr('value', '');
                $('#modal-default').modal('hide');
            });
            var $loading = $('.loader').hide();
            $('#datep').datepicker({
                autoclose: true
            })

        $(function () {
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
            });
        });
    </script>
    @endsection
