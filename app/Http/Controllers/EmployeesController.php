<?php

namespace App\Http\Controllers;

use App\employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $employees = employees::where('ip_address',$request->ip_address)->first();
        return response()->json([
            'employeewebhistory' => $employees
        ]);
    }
    /*cmd programmming start*/
  public static function getemployeeData($ip_address)
    {
        $employees = employees::where('ip_address',$ip_address)->first();
        echo  response()->json([
            'employeewebhistory' => $employees
        ]);
    }
    public static function setempdata($ip_address,$emp_name)
    {
        $employees = new employees;
        $employees->ip_address = $ip_address;
        $employees->emp_name = $emp_name;
        $employees->save();
        echo  response()->json([
            'message' => 'Successfully created employees details !',
            'employees' => $employees
        ]);
    }
     public static function empdelete($ip_address)
    {
        $employees = employees::where('ip_address',$ip_address);
       if(!empty($employees)){
        $employees->delete();
        $message = 'Successfully deleted employees !';
       }else{
        $message = 'Nothing to delete';
       }
       echo  response()->json([
        'message' => $message
    ]);
    }
   /*cmd programmming end*/
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ip_address' => 'required',
            'emp_name' => 'required',
        ]);
        $employees = employees::create($request->all());
        return response()->json([
        	'message' => 'Successfully created employees details !',
            'employeewebhistory' => $employees
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show(employees $employees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit(employees $employees)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employees $employees)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function employeesdelete(Request $request)
    {
        $employees = employees::where('ip_address',$request->ip_address);
       if(!empty($employees)){
        $employees->delete();
        $message = 'Successfully deleted employees !';
       }else{
        $message = 'Nothing to delete';
       }
       return response()->json([
        'message' => $message
    ]);
    }
}
