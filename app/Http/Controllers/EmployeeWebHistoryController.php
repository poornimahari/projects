<?php

namespace App\Http\Controllers;

use App\employee_web_history;
use App\employees;

use Illuminate\Http\Request;

class EmployeeWebHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*Commandline programming start*/
    public static function getwebhistoryData($ipaddress)
{
   

    $webhistory = employee_web_history::where('ip_address',$ipaddress)->first();

        if(!empty($webhistory)){
            if($webhistory->url!=''){
                $webhistory = $webhistory;
            } else{
                $webhistory = 'NULL';
            }

        }else{
            $webhistory = "Resource Not Found";
        }
        echo response()->json([
            'employeewebhistory' => $webhistory
        ]);
}
   
     public static function setWebhistory($ipaddress,$url)
    {
        $employees = employees::where('ip_address',$ipaddress)->first();
        if(!empty($employees)){
            $webhistory = employee_web_history::where('ip_address',$ipaddress)->first();
        
        if(!empty($webhistory)){
            if($webhistory->url!=''){
                $web =  explode(',',$webhistory->url);
          
           for($i=0;$i<count($web);$i++){
               $webs[$i] =  $web[$i];
           }
           array_push($webs,$url);

           $webSearch =  implode(',',$webs);
           $webhistory->url = $webSearch;
           $webhistory->save();
            }
           
           
        }else{
            $webhistory = new employee_web_history;
            $webhistory->ip_address = $ipaddress;
            $webhistory->url = $url;
            $webhistory->save();

        }
        

        echo response()->json([
            'message' => 'Great success! webhistory created !',
        ]);
        }else{
          echo response()->json([
            'message' => 'Ip address not mapped to any of the employee !',
        ]);  
        }
        
       
    }
     public static function webhistorydel($ip_address)
    {
        $webhistory = employee_web_history::where('ip_address',$ip_address);
       if(!empty($webhistory)){
        $webhistory->delete();
        $message = 'Successfully deleted websearch history!';
       }else{
        $message = 'Nothing to delete';
       }
       echo response()->json([
        'message' => $message
    ]);
        
    }

    /*Commandline programming end*/
     public function index(Request $request)
    {
        $webhistory = employee_web_history::where('ip_address',$request->ip_address)->first();
        if(!empty($webhistory)){
            if($webhistory->url!=''){
                $webhistory = $webhistory;
            } else{
                $webhistory = 'NULL';
            }

        }else{
            $webhistory = "Resource Not Found";
        }
        return response()->json([
            'employeewebhistory' => $webhistory
        ]);
    }
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
        ]);
        
        $webhistory = employee_web_history::where('ip_address',$request->ip_address)->first();
        
        if(!empty($webhistory)){
            if($webhistory->url!=''){
                $web =  explode(',',$webhistory->url);
          
           for($i=0;$i<count($web);$i++){
               $webs[$i] =  $web[$i];
           }
           array_push($webs,$request->url);

           $webSearch =  implode(',',$webs);
           $webhistory->url = $webSearch;
           $webhistory->save();
            }
           
           
        }else{
            $webhistory = employee_web_history::create($request->all());
        }
        

        return response()->json([
            'message' => 'Great success! webhistory created !',
            'employeewebhistory' => $webhistory
        ]);
       
    }
   
    
    /**
     * Display the specified resource.
     *
     * @param  \App\employee_web_history  $employee_web_history
     * @return \Illuminate\Http\Response
     */
    public function show(employee_web_history $employee_web_history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\employee_web_history  $employee_web_history
     * @return \Illuminate\Http\Response
     */
    public function edit(employee_web_history $employee_web_history)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employee_web_history  $employee_web_history
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee_web_history $employee_web_history)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employee_web_history  $employee_web_history
     * @return \Illuminate\Http\Response
     */
    public function webhistorydelete(Request $request)
    {
        $webhistory = employee_web_history::where('ip_address',$request->ip_address);
       if(!empty($webhistory)){
        $webhistory->delete();
        $message = 'Successfully deleted websearch history!';
       }else{
        $message = 'Nothing to delete';
       }
       return response()->json([
        'message' => $message
    ]);
        
    }
}
