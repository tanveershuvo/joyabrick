<?php

namespace App\Http\Controllers;

use App\ProductDetail;
use Illuminate\Http\Request;
use DataTables;
use DB;
use Response;


class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $data = ProductDetail::all();
    //  dd($data);

      return  Datatables::of($data)
               ->addIndexColumn()
               ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'product_name'=>'required|string|max:255',
          'product_rate'=>'required',
        ]);

        $prod_id = $request->pro_id;
        $product =ProductDetail::updateOrCreate(['id'=>$prod_id],
        ['pro_name'=> $request->product_name,
          'unit_price'=> $request->product_rate
        ]);
        dd($product);
        return Response::json($product);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $product  = ProductDetail::where('id',$id)->first();
      return Response::json($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        dd("ok");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod_id = ProductDetail::findOrFail($id)->delete();
        return response()->json();

        // $emp = EmployeeDetail::findOrFail($id)->delete();
        // return response()->json();
    }



	 				  // // //Edit by using  CreateOrUpdate function in EmployeeDetailController
	 				  //
	 				  //         $('body').on('click', '.productedit', function () {
	 				  //           var id = $(this).data('id');
	 				  //           $.get("{{ route('addproduct.index') }}" +'/' + id +'/edit', function (response) {
	 				  //           //  console.log(response);
	 				  //           $('#submit').val("edit-product"); //
	 				  //           $('#prod_id').val(response.id);
	 				  //           $('#product_name').val(response.pro_name);
	 				  //           $('#product_rate').val(response.unit_price);
	 				  //           $('#modal-lg').modal('show');
	 				  //   })
	 				  // });
	 				  //
	 				  // // //SoftDeletes function
	 				  //         function softDel(id){
	 				  //             //alert(id);
	 				  //             Swal.fire({
	 				  //           title: 'Are you sure?',
	 				  //           text: "You won't be able to revert this!",
	 				  //           icon: 'error',
	 				  //           showCancelButton: true,
	 				  //           confirmButtonColor: '#3085d6',
	 				  //           cancelButtonColor: '#d33',
	 				  //           confirmButtonText: 'Yes, delete it!'
	 				  //         }).then((result) => {
	 				  //           if (result.value) {
	 				  //               $.get("{{ route('addproduct') }}"  +'/' + id +'/destroy', function () {
	 				  //
	 				  //                   Swal.fire({
	 				  //                    title: 'Successfully Deleted!',
	 				  //                    icon: 'success',
	 				  //                    showCancelButton: false,//There won't be any cancle button
	 				  //                    showConfirmButton  : false,
	 				  //                    timer: 1500
	 				  //                  })
	 				  //                  table.draw();
	 				  //                  });
	 				  //           //  alert(id);
	 				  //           }
	 				  //         })
	 				  //           }
	 				  //
	 				  //           //for reset all form data
	 				  //         function resetform(){
	 				  //
	 				  //           $('#productTable').trigger("reset");
	 				  //           ok();
	 				  //           //DevTanveerok
	 				  //         }
	 				  //
	 				  //
	 				  //         //Add Amount
	 				  //       async function addAmount(id,data){
	 				  //         //alert(id);
	 				  //           const { value: number } = await Swal.fire({
	 				  //           input: 'text',
	 				  //           title: 'Input email address',
	 				  //           inputPlaceholder: 'Type your message here',
	 				  //           inputValidator: (value) => {
	 				  //             if (!value) {
	 				  //               return 'You need to write something!'
	 				  //             }
	 				  //             if (isNaN(value)) {
	 				  //               return 'Inpur Must Be number!'
	 				  //             }
	 				  //             if (value){
	 				  //               var b = parseInt(data);
	 				  //               var c = parseInt(value);
	 				  //               var a = b + c;
	 				  //               //console.log(a,b,c);
	 				  //
	 				  //               $.ajax({
	 				  //
	 				  // 				   url:"{{route('addproduct.proup')}}",
	 				  // 				  //  headers: {
	 				  //  					//   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	 				  //  				  // },
	 				  //                   type: 'POST',
	 				  //                   data : {id:id, data:data},
	 				  //                   success: function (response) {
	 				  //
	 				  //                   }
	 				  //                 })
	 				  //
	 				  //             }
	 				  //           },
	 				  //           showCancelButton: true
	 				  //         })
	 				  //
	 				        }
}
