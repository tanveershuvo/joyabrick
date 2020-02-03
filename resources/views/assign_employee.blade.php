@extends('layouts.admin_layout')
@section('public_css')
    <style>
        div.dataTables_length {
            padding-top: 5px;
        }
        table.dataTable tbody th,
        table.dataTable tbody td {
            white-space: nowrap;
        }


    </style>

@endsection

@section('page_title')
    <title> @lang('home.bfms_add_employee')</title>
@endsection
@section('title')
    <a class="btn btn-info" role="button" onclick="resetform();"  data-toggle="modal" data-target="#modal-lg"> <i class="fa fa-plus" aria-hidden="true"></i> @lang('home.add_new_employee') </a>
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
                    <h3 class="card-title">@lang('home.emp_table_tittle')</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered  table-striped"  style="width:100%">
                        <thead>
                        <tr>
                            <th>@lang('home.no')</th>
                            <th>@lang('home.name')</th>
                            <th>@lang('home.email_address')</th>
                            <th>@lang('home.contact')</th>
                            <th>@lang('home.designation')</th>
                            <th>@lang('home.salary')</th>
                            <th>@lang('home.address')</th>
                            <th>@lang('home.action')</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                        <tr>
                            <th>@lang('home.no')</th>
                            <th>@lang('home.name')</th>
                            <th>@lang('home.email_address')</th>
                            <th>@lang('home.contact')</th>
                            <th>@lang('home.designation')</th>
                            <th>@lang('home.salary')</th>
                            <th>@lang('home.address')</th>
                            <th>@lang('home.action')</th>
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
                                    <input type="text" id="employee_name" name="employee_name"  class="form-control count" placeholder="Enter Name">
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
                        return '<button class="edit btn btn-outline-info fas fa-edit " data-toggle="tooltip" data-placement="top" title="Edit" data-id="'+ data +'"> </button> '
                                +
                                '<button class="btn btn-outline-danger fas fa-trash-alt" onclick="softDel('+ data +');" data-id="'+ data +'"> </button>'
                              }
                     },
                   ],
                      //Dom using in Datatables  possign the whole table's position
                      dom: '"<\'row\'<\'col-sm-12 text-center\'B>>" +\n' +
                          '"<\'row\'<\'col-sm-12 col-md-6\'l><\'col-sm-12 col-md-6\'f>>" +\n' +
                          '"<\'row\'<\'col-sm-12\'t>>" +\n' +
                          '"<\'row\'<\'col-sm-12 col-md-5\'i><\'col-sm-12 col-md-7\'p>>",',
                   //Export Datatables buttons
                   buttons: [
                     {
                       extend: 'copy',
                       title: 'Employee details  <?php $ldate = date('Y-m-d H:i:s');echo $ldate;?>',
                       text: '<span style="color:black"><i class="fas fa-copy"></i> Copy</span>',
                       className: "btn btn-outline-warning",
                       exportOptions: {
                          columns: [0, 1, 2, 3, 4, 5,6]
                      }
                    },
                     {
                       extend: 'excelHtml5',
                       title: 'Employee details <?php $timestamp = date('m-d-Y h:i A');echo $timestamp;?>',
                       text: '<span style="color:black"><i class="fas fa-file-excel"></i> Excel</span>',
                       className: "btn btn-outline-warning",

                       exportOptions: {
                          columns: [0, 1, 2, 3, 4, 5,6]
                      }
                    },
                    {
                      extend: 'pdfHtml5',
                      title: '@lang('home.name') <?php $timestamp = date('m-d-Y h:i A');echo $timestamp;?>',
                      text: '<span style="color:black"><i class="fas fa-file-pdf"></i> @lang('home.name')</span>',
                      className: "btn btn-outline-warning",
                       sCharSet: "utf-8",
                      exportOptions: {
                         columns: [0, 1, 2, 3, 4, 5,6]
                     },
                     customize : function(doc) {
                       doc.content[1].table.widths = [ '5%', '15%', '20%', '15%', '10%','10%','20%'];
                     }
                   },

                   {
                     extend: 'csvHtml5',
                     title: 'Employee details <?php $timestamp = date('m-d-Y h:i A');echo $timestamp;?>',
                     text: '<span style="color:black"><i class="fas fa-file-csv"></i> Csv</span>',
                     className: "btn btn-outline-warning",
                     exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5,6]
                    }
                  },
                  {
                    extend: 'print',
                    title: 'Employee details <?php $timestamp = date('m-d-Y h:i A');echo $timestamp;?>',
                    text: '<span style="color:black"><i class="fas fa-print"></i> Print</span>',
                    className: "btn btn-outline-warning",
                    exportOptions: {
                       columns: [0, 1, 2, 3, 4, 5]
                   }
                 },
                   ],
                      scrollY:        true,
                      scrollX:        true,
                      scrollCollapse: true,

                      //Length & Searach button
                      lengthMenu: [
                          [10, 25, 50, 100],
                          ['10', '25', '50', '100']
                      ],
                      oLanguage: {
                          "sSearch": "Quick Search:"
                      },
                   });

                 });


//Inser data
        $(document).on('keyup', '.form-control', function() {
            var err_id = $(this).attr('id');

            $('#' + err_id).closest('.form-control').removeClass('is-invalid');
            $('#' + err_id).closest('.error').find('.error-block').remove();
        });
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
                   // toastr.success(data.message, data.title);
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
                                .append('<span class="error-block"  style="color:red"><strong>' + value + '</strong></span>');
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

          //for reset all form data
        function resetform(){

          $('#addform').trigger("reset");
          ok();
          //DevTanveerok
        }

    </script>
{{--ok--}}
    @endsection
