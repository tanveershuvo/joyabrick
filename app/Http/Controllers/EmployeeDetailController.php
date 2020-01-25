<?php

namespace App\Http\Controllers;

use App\EmployeeDetail;
use Illuminate\Http\Request;
use DataTables;
use DB;


class EmployeeDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      if ($request->ajax()) {

         $data = EmployeeDetail::latest()->get();
         return Datatables::of($data)
                 ->addIndexColumn()
                 ->addColumn('action', function($row){
                        $btn = '<a data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm">Edit</a>';
                        return $btn;
                 })
                 ->rawColumns(['action'])
                 ->make(true);
     }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $data = EmployeeDetail::latest()->get();
      //echo $data;exit();
      dd($data);

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

        $employee = new EmployeeDetail;
        $employee->name = $request['employee_name'];
        $employee->email = $request['email'];
        $employee->phone = $request['phone'];
        $employee->designation = $request['designation'];
        $employee->salary = $request['salary'];
        $employee->address = $request['address'];
        $employee->save();


        //dd($data);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EmployeeDetail  $employeeDetail
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeDetail $employeeDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EmployeeDetail  $employeeDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeeDetail $employeeDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmployeeDetail  $employeeDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeDetail $employeeDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmployeeDetail  $employeeDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeDetail $employeeDetail)
    {
        //
    }
}
