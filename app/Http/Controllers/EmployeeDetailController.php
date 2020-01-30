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
    //if ($request->ajax()) {
        $data = EmployeeDetail::all();

        return  Datatables::of($data)
                 ->addIndexColumn()
                 // ->addColumn('action', function($row){
                 //        $btn = '<a data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm">Edit</a>';
                 //        return $btn;
                 // })
                 // ->rawColumns(['action'])
                 ->make(true);
                // dd($test);
              //  return $test;

    // }

      // return view('assign_employee',compact('showemployee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('season_detail');

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

    $proId = $request->emp_id;
    $user   =   EmployeeDetail::updateOrCreate(['id' => $proId],
                ['name' => $request->employee_name,
                 'email' => $request->email,
                 'phone' => $request->phone,
                 'designation' => $request->designation,
                 'salary' => $request->salary,
                 'address' => $request->address
               ]);
               //dd($user);
    return Response::json($user);


        // $employee = new EmployeeDetail;
        // $employee->name = $request['employee_name'];
        // $employee->email = $request['email'];
        // $employee->phone = $request['phone'];
        // $employee->designation = $request['designation'];
        // $employee->salary = $request['salary'];
        // $employee->address = $request['address'];
        // $employee->save();


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
    public function edit($id)
    {
      $editEmp  = EmployeeDetail::where('id',$id)->first();
      //dd($editEmp);
      return Response::json($editEmp);
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
