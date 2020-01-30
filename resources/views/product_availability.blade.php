@extends('layouts.admin_layout')
@section('public_css')
  <meta name="_token" content="{{csrf_token()}}" />
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('adminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
    @endsection

@section('page_title')
    <title>BFMS Add Employee</title>
@endsection
@section('title')
    <button class=" btn btn-info"  href="#" role="button"  data-toggle="modal" data-target="#modal-lg"> <i class="fa fa-plus" aria-hidden="true"></i> ADD New Products details </button>
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
                    <h3 class="card-title">ADD PRODUCT /EDIT PRODUCT /PRODUCT AVAILABILITY </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="producttable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Product Name</th>
                            <th>Product Rate</th>
                            <th>Product Stock</th>
                            <th>Stock Update</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                        <tr>
                          <th>No.</th>
                          <th>Product Name</th>
                          <th>Product Rate</th>
                          <th>Product Stock</th>
                          <th>Stock Update</th>
                          <th>Action</th>
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
                    <form id="addProductform">
                        @csrf
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-2">
                                    <label for="PRODUCTName :">Name :</label>
                                </div>
                                <div class="error col-md-10">
                                    <input type="text" id="product_name" name="product_name" class="form-control" placeholder="Enter Product Name">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-2">
                                    <label for="">Unit Price :</label>
                                </div>
                                <div class="error col-md-10">
                                    <input type="text" id="product_rate"  name="product_rate" class="form-control"  placeholder="Enter Rate">
                                </div>
                            </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" id="submit" class="btn btn-success" >Save </button>
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

                var table = '';
                 $(function () {
                   $.ajaxSetup({
                   headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   }
                   });
                  table = $('#producttable').DataTable({
                   processing: true,
                   serverSide: true,
                   beforeSend: function() {
                    $('.loader').show();
                   },
                   complete: function(){
                      $('.loader').hide();
                   },
                   ajax: "{{route('product.index')}}",
                   columns: [
                     {data: 'DT_RowIndex'},
                     {data: 'pro_name'},
                     {data: 'unit_price'},
                     {data: 'available'},
                     {   data: 'id',
                       orderable: false,
                       searchable: false,
                       "render": function ( data, type, row, meta ) {
                        return '<button class="btn btn-info fas fa-success " data-id="'+ data +'"> </button> '
                              }
                     },
                     {   data: 'id',
                       orderable: false,
                       searchable: false,
                       "render": function ( data, type, row, meta ) {
                        return '<button class="btn btn-info fas fa-edit " data-id="'+ data +'"> </button> '
                                +
                                '<button class="btn btn-danger fas fa-trash-alt" data-id="'+ data +'"> </button>'
                              }
                     },
                   ]
                   });
                 });



        function ok(){
            formdata = $('#addProductform');
            formdata.find('.error-block').remove();
            formdata.find('.form-control').removeClass('is-invalid');
        }
        // ajax insertion and error handling
        $('#submit').click(function (event) {
            event.preventDefault();
          //  alert('ok');
            ok();
            $.ajax({
                url : "{{route('product.store')}}",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                
                data : formdata.serialize(),
                success: function (response) {
                    $('#addProductform').trigger("reset");
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

        //
        $(function() {
            $("#close").click(function() {
                $('#form').trigger("reset");
                $('#kok').attr('value', '');
                $('#modal-default').modal('hide');
            });
            var $loading = $('.loader').hide();

          });


    </script>
    @endsection
