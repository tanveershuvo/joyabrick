<?php

namespace App\Http\Controllers;

use App\EmployeeDetail;
use Illuminate\Http\Request;
use DataTables;
use DB;
use Response;



class EmployeeDetailController extends Controller
{
  public function __construct()
 {
   $this->middleware('auth');
 }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

    //  dd($data);
        $data = EmployeeDetail::all();

        return  Datatables::of($data)
                 ->addIndexColumn()

                 ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
          'employee_name' => 'required|string|max:255',
          'email' => 'required|email|string|max:255',
          'phone' => 'required|string|max:255',
          'designation' => 'required|string|max:255',
          'salary' => 'required|integer',
          'address' => 'required|string|max:255',

      ]);

    $empId = $request->emp_id;
    $emp =   EmployeeDetail::updateOrCreate(['id' => $empId],
                ['name' => $request->employee_name,
                 'email' => $request->email,
                 'phone' => $request->phone,
                 'designation' => $request->designation,
                 'salary' => $request->salary,
                 'address' => $request->address
               ]);

      return Response::json($emp);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EmployeeDetail  $employeeDetail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $editEmp  = EmployeeDetail::where('id',$id)->first();
      //dd($editEmp);
      return Response::json($editEmp);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmployeeDetail  $employeeDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $emp = EmployeeDetail::findOrFail($id)->delete();

        return response()->json();
    }
}
