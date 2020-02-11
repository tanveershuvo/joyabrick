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
    <title> @lang('home.bfms_add_product')</title>
@endsection
@section('title')
    <a class="btn btn-info" role="button" onclick="resetform();"  data-toggle="modal" data-target="#modal-lg"> <i class="fa fa-plus" aria-hidden="true"></i> @lang('home.add_new_product') </a>
@endsection
@section('breadcrumb_list')
    <li class="breadcrumb-item active">@lang('home.product')</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <!-- /.card -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">@lang('home.product_tbl_title')</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="productTable" class="table table-bordered  table-striped"  style="width:100%">
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

    <!-- New Product Add Modal Form-->
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Products's Information Here</h4>
                    <button type="button" class="close" data-dismiss= "modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addProductform">
                        @csrf
                        <div class="card-body">
                            <input type="hidden" id="prod_id" name="pro_id">
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
                    <button type="button" class="btn btn-danger" onclick="resetform();" data-dismiss="modal">Close</button>
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
                  table = $('#productTable').DataTable({
                   processing: true,
                   serverSide: true,
                   ajax: "{{route('showAllProduct')}}",

                   columns: [
                     {data: 'DT_RowIndex'},
                     {data: 'pro_name'},
                     {data: 'unit_price'},
                     {data: 'available'},
                     {   data: 'available',
                       orderable: false,
                       searchable: false,
                       "render": function ( data, type, row, meta ) {
                        return '<button class="btn btn-outline-danger" onclick="addAmount('+row.id+','+data+');" ><i class="fa fa-plus" aria-hidden="true"></i> Add Amount</button> '
                              }
                     },
                     {   data: 'id',
                       orderable: false,
                       searchable: false,
                       "render": function ( data, type, row, meta ) {
                         return '<button class="productedit btn btn-outline-info fas fa-edit " data-toggle="tooltip" data-placement="top" title="Edit" data-id="'+ data +'"> </button> '
                                 +
                                 '<button class="btn btn-outline-danger fas fa-trash-alt" onclick="softDel('+ data +');" data-id="'+ data +'"> </button>'
                                 }
                       },
                     ]
                     });
                   });


 				  // //Inser data
 				          $(document).on('keyup', '.form-control', function() {
 				              var err_id = $(this).attr('id');

 				              $('#' + err_id).closest('.form-control').removeClass('is-invalid');
 				              $('#' + err_id).closest('.error-block').remove();
 				          });
 				          function ok(){
 				              formdata = $('#addProductform');
 				              formdata.find('.error-block').remove();
 				              formdata.find('.form-control').removeClass('is-invalid');
 				          }
 				  		$.ajaxSetup({
 				  	   headers: {
 				  		   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 				  	   }
 				     			});
 				          // ajax insertion and error handling
 				          $('#submit').click(function (event) {
 				              event.preventDefault();
 				              ok();
 				              $.ajax({
 				                   url : "{{route('addproduct')}}",
 				                  type: "POST",
 				                  data : formdata.serialize(),
 				                  success: function (response) {
 				                      $('#addProductform').trigger("reset");
 				                      $('#modal-lg').modal('hide');
 				                     // toastr.success(data.message, data.title);
 				                      table.draw();
 				                  },
 				                  error : function (xhr) {
 				                      var res = xhr.responseJSON;
 				                     //console.log(formdatares)
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

						  // //Edit by using  CreateOrUpdate function in EmployeeDetailController

						          $('body').on('click', '.productedit', function () {
						            var id = $(this).data('id');
						            $.get("{{ url('/updateProduct') }}" +'/' + id , function (response) {
						            //  console.log(response);
						            $('#submit').val("edit-product"); //
						            $('#prod_id').val(response.id);
						            $('#product_name').val(response.pro_name);
						            $('#product_rate').val(response.unit_price);
						            $('#modal-lg').modal('show');
						    })
						  });

						 // SoftDeletes function
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
		 				                $.get("{{ url('/deleteProduct') }}"  +'/' + id , function () {

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
								$('#addProductform').trigger("reset");
								ok();
							
							  }

    </script>
    @endsection
