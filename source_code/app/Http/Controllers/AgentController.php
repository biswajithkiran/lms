<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Lead;
use Session;
use DB;

class AgentController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function dashboard()
	{
		$tot_leads          = Lead::count();
        $ver_leads          = Lead::where('status','=','V')
                                    ->get();
        $ver_leadcount      = $ver_leads->count();

        $pen_leads          = Lead::where('status','=','P')
                                    ->get();
        $pen_leadcount      = $pen_leads->count();

        $dup_leads          = Lead::where('status','=','D')
                                    ->get();
        $dup_leadcount      = $dup_leads->count();
        return view('agents.dashboard',['tot_leads'=>$tot_leads,'ver_leadcount'=>$ver_leadcount,'pen_leadcount'=>$pen_leadcount,'dup_leadcount'=>$dup_leadcount]);
	}

	public function login()
	{
		return view('agents.login');
	}

	public function agentlogin(Request $Request)
	{
		$this->validate($Request,[
    								'email'		=>	'required|email',
    								'password'	=>	'required'
    							]);
    	if(Auth::attempt(['email'=>$Request->email,'password'=>$Request->password]))
    	{
            $Request->session()->put('agent_name',Auth::user()->name);
            $Request->session()->put('join_date',Auth::user()->created_at);
            return redirect("/agent");	 
    	}
    	else
    	{
    	   	return redirect("/agent/login")->withInput($Request->input())->with('message','Invalid username or password!');
    	}   
	}

	public function logout()
    {
        session()->forget('agent_name');
        session()->forget('join_date');
    	Auth::logout();
      	return redirect("/agent/login")->with('messagelo','Successfully logged out!');
    }

    public function list_leads()
    {
        $arrLeads           = Lead::select('id','first_name','last_name',
                                'email','phone','home_area','created_at')
                                ->orderBy('created_at','DESC')
                                ->get();

    	return view('agents.leads',['arrLeads'=>$arrLeads]);
    }

    public function lead_details($id)
    {
        $arrLead            = Lead::find($id);
        return view('agents.lead_details',['arrLead'=>$arrLead]);
    }
}
