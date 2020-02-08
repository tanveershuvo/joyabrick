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
}
