@extends('layouts.admin_layout')
@section('public_css')

@endsection

@section('page_title')
    <title>BFMS Add Employee</title>
@endsection
@section('title')
    <a class="btn btn-primary"  href="#" role="button" onclick="resetform();"  data-toggle="modal" data-target="#modal-lg"> <i class="fa fa-plus" aria-hidden="true"></i> ADD EMPLOYEE </a>
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
                            <th>No.</th>
                            <th>Name</th>
                            <th>Email Address</th>
                            <th>Contact</th>
                            <th>Designation</th>
                            <th>Salary</th>
                            <th>Address</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                        <tr>
                          <th>No.</th>
                          <th>Name</th>
                          <th>Email Address</th>
                          <th>Contact</th>
                          <th>Designation</th>
                          <th>Salary</th>
                          <th>Address</th>
                          <th>action</th>
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
                          <input type="hidden" id="emp_id" name="emp_id">
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="employeeName :">Employee Name :</label>
                                </div>
                                <div class="error col-md-9">
                                    <input type="text" id="employee_name" name="employee_name" class="form-control" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="employeeEmail">Employee email :</label>
                                </div>
                                <div class="error col-md-9">
                                    <input type="email" id="email"  name="email" class="form-control"  placeholder="Enter email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="Employee Phone">Employee Phone :</label>
                                </div>
                                <div class="error col-md-9">
                                <input type="text" id="phone"  name="phone" class="form-control"  placeholder="Enter Phone Number">
                                </div>
                           </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="status" >Designation :</label>
                                </div>
                                <div class="error col-md-9">
                                    <select class="form-control" id="designation" name="designation" >
                                        <option value="Manager">Manager</option>
                                        <option value="Staff">Staff</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="status" >Salary :</label>
                                </div>
                                <div class="error col-md-9">
                                    <input type="text" class="form-control" id="salary" name="salary" placeholder="Enter Salary">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="status" >Address :</label>
                                </div>
                                <div class="error col-md-9">
                                    <input type="text" class="form-control" id="address" onkeyup="ok();" name="address" placeholder="Enter Address">
                                </div>
                            </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" onclick="resetform();" data-dismiss="modal">Close</button>
                    <button type="button" id="submit" class="btn btn-success" >Save</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection

@section('public_js')

    <!-- AdminLTE for demo purposes -->
    <script>
        //to stack all form data in a variable

                var table = '';
                 $(function () {
                   $.ajaxSetup({
                   headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   }
                   });
                  table = $('#example2').DataTable({
                   processing: true,
                   serverSide: true,
                   beforeSend: function() {
                    $('.loader').show();
                   },
                   complete: function(){
                      $('.loader').hide();
                   },
                   ajax: "{{route('addemployee.index')}}",
                   columns: [
                     {data: 'DT_RowIndex'},
                     {data: 'name'},
                     {data: 'email'},
                     {data: 'phone'},
                     {data: 'designation'},
                     {data: 'salary'},
                     {data: 'address'},
                     {   data: 'id', //databse table id example:emplpoyeeDetail table's id
                       orderable: false,
                       searchable: false,
                       "render": function ( data, type, row, meta ) {
                        return '<button class="edit btn btn-info fas fa-edit " data-id="'+ data +'"> </button> '
                                +
                                '<button class="btn btn-danger fas fa-trash-alt" onclick="softDel('+ data +');" data-id="'+ data +'"> </button>'
                              }
                     },
                   ],
                   buttons: [
                       'copy', 'csv', 'excel', 'pdf', 'print'
                   ]
                   });
                 });


//Inser data
        function ok(){
            formdata = $('#addform');
            formdata.find('.error-block').remove();
            formdata.find('.form-control').removeClass('is-invalid');
        }
        // ajax insertion and error handling
        $('#submit').click(function (event) {
            event.preventDefault();
            ok();
            $.ajax({
                url : "{{route('addemployee.store')}}",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                data : formdata.serialize(),
                success: function (response) {
                    $('#addform').trigger("reset");
                    $('#modal-lg').modal('hide');
                    //$("#msg").css("display", "");
                   // $("#msg").fadeOut(4000);
                    table.draw();
                },
                error : function (xhr) {
                    var res = xhr.responseJSON;
                   //console.log(res)
                    if ($.isEmptyObject(res) == false) {
                        $.each(res.errors, function (key, value) {
                            //console.log(value)
                            $('#' + key)
                                .closest('.error')
                                .append('<span class="error-block" style="color:red"><strong>' + value + '</strong></span>');
                            $('#' + key)
                                .closest('.form-control')
                                .addClass('is-invalid');
                        });
                    }
                }
            })
        });

//Edit by using  CreateOrUpdate function in EmployeeDetailController

        $('body').on('click', '.edit', function () {
          var id = $(this).data('id'); //Here id = data id
          $.get("{{ route('addemployee.index') }}" +'/' + id +'/edit', function (response) {
            //console.log(response);
          $('#submit').val("edit-employee"); //
          $('#emp_id').val(response.id);
          $('#employee_name').val(response.name);
          $('#email').val(response.email);
          $('#phone').val(response.phone);
          $('#designation').val(response.designation);
          $('#salary').val(response.salary);
          $('#address').val(response.address);
            $('#modal-lg').modal('show');
  })
});

//SoftDeletes function
        function softDel(id){
            //alert(id);
            Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'error',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.value) {
              $.get("{{ route('addemployee.index') }}"  +'/' + id +'/destroy', function () {

                  Swal.fire({
                   title: 'Successfully Deleted!',
                   icon: 'success',
                   showCancelButton: false,//There won't be any cancle button
                   showConfirmButton  : false,
                   timer: 1500
                 })
                 table.draw();
                 });
          //  alert(id);
          }
        })
          }
        function resetform(){

          $('#addform').trigger("reset");

        }

    </script>
    @endsection
