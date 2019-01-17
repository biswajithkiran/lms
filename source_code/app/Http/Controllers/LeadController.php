<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Lead;
use Session;
use DateTime;

class LeadController extends Controller
{
    public function leadform()
    {
    	return view('leadform');
    }

    public function save_lead(Request $Request)
    {
    	$this->validate($Request,[
                                    'first_name'		=> 'required',
			    					'last_name'			=> 'required',
			    					'email'				=> 'required|email',
			    					'phone'				=> 'required|min:10|numeric',
			    					'home_area' 		=> 'required'
                                ],
                                [
                                	'first_name.required'  	=>'Firstname is required',
			                        'last_name.required' 	=>'Lastname is required', 
			                        'email.required'       	=>'Email address is required',
			                        'phone.required'      	=>'Phone number is required',
			                        'phone.min'      		=>'Phone number seems to be invalid',
			                        'phone.numeric'      	=>'Phone number seems to be invalid',
			                        'home_area.required'   	=>'Home area is required'		
                                ]);
    	//$loc_timezone				= setlocale(LC_TIME, config('app.locale'));
    	//echo "time zone=".$loc_timezone."<br>";
    	//$current_time				= date('Y-m-d H:i:s');
    	//echo "current_time=".$current_time."<br>";
    	
    	//$utc_time					= $this->convertTimeToUTCzone($current_time,$loc_timezone);
    	//echo "utc_time=".$utc_time."<br>";
    	//die();
    	$ip_address 				= $Request->ip();
    	$objL 						= new Lead;
    	$objL->camp_id 				= $Request->camp_id;
    	$objL->first_name 			= $Request->first_name;
    	$objL->last_name 			= $Request->last_name;
  		$objL->email 				= $Request->email;
  		$objL->phone 				= $Request->phone;
  		$objL->home_area 			= $Request->home_area;
  		$objL->address 	   			= $Request->address;
  		$objL->ip_address 	   		= $ip_address;
		if($objL->save())
		{
			Session::flash('alert-success', 'You have successfully submitted the data.Thank you for sharing the informations.');
			return redirect("/");
			//return redirect("/")->with('messagelo','Thank you for sharing the informations.');
		}
		else
		{	
			Session::flash('alert-danger', 'Some unknown error while saving the data!,Please try later.');
			return redirect("/");
			/*return redirect("/")->withInput($Request->input())->with('message','Some unknown error while saving the data!');*/
			
		}
    }

    public function ajax_save_lead(Request $Request)
    {
    	$rules 		= array(
    					'first_name'		=> 'required',
    					'last_name'			=> 'required',
    					'email'				=> 'required|email',
    					'phone'				=> 'required|min:10|numeric',
    					'home_area' 		=> 'required'
    				);
    	$messages 	= array(
                        'first_name.required'  	=>'Firstname is required',
                        'last_name.required' 	=>'Lastname is required', 
                        'email.required'       	=>'Email address is required',
                        'phone.required'      	=>'Phone number is required',
                        'phone.min'      		=>'Phone number seems to be invalid',
                        'phone.numeric'      	=>'Phone number seems to be invalid',
                        'home_area.required'   	=>'Home area is required');

    	$validator = Validator::make($Request->all(), $rules,$messages);

    	if ($validator->fails())
        {
            return response()->json(['result'=>'Failed','errors'=>$validator->errors()->all()]);
        }

    	$ip_address 				= $Request->ip();
    	$objL 						= new Lead;
    	$objL->camp_id 				= $Request->camp_id;
    	$objL->first_name 			= $Request->first_name;
    	$objL->last_name 			= $Request->last_name;
  		$objL->email 				= $Request->email;
  		$objL->phone 				= $Request->phone;
  		$objL->home_area 			= $Request->home_area;
  		$objL->address 	   			= $Request->address;
  		$objL->ip_address 	   		= $ip_address;
		if($objL->save())
		{			
			return response()->json(['result'=>'Success','errors'=>'']);
		}
		else
		{	
			return response()->json(['result'=>'DB Error','errors'=>'Some unkown error occurred while saving the data. Please try later!!']);			
		}
    }

    function convertTimeToUTCzone($str, $userTimezone, $format = 'Y-m-d H:i:s')
    {        
	    $new_str = new DateTime($str, new DateTimeZone(  $userTimezone  ) );
	    $new_str->setTimeZone(new DateTimeZone('UTC'));
	    return $new_str->format( $format);
	}
}
