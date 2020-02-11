<?php

namespace App\Http\Controllers;

use App\ProductDetail;
use Illuminate\Http\Request;
use DataTables;
use DB;
use Response;

class ProductDetailsControlller extends Controller
{
	public function index(Request $request)
	{
	  $data = ProductDetail::all();
	//  dd($data);

	  return  Datatables::of($data)
			   ->addIndexColumn()
			   ->make(true);
	}

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

	public function edit($id)
    {
      $product  = ProductDetail::where('id',$id)->first();
      return Response::json($product);
    }

	public function destroy($id)
    {
        $prod_id = ProductDetail::findOrFail($id)->delete();
        return response()->json();

        // $emp = EmployeeDetail::findOrFail($id)->delete();
        // return response()->json();
    }

	public function update(Request $request)
    {
        dd("ok");
    }
}
