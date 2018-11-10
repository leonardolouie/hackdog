<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class StaffController extends Controller
{
    //

	public function index()
	{




  	 //$access_token = "dbadb51195d5766b8a201405e801777b46ea19e85203161103ef05aa1cabc19d";

		$url= "https://my.tanda.co/api/v2/users?show_wages=true&access_token=dbadb51195d5766b8a201405e801777b46ea19e85203161103ef05aa1cabc19d";


		$responses = file_get_contents($url, true);


		$response = json_decode($responses);



		return view('tables_dynamic')->with(compact('response'));
	}


	public function show(Request $request, $id)
	{






		$url= "https://my.tanda.co/api/v2/users/".$id."?show_wages=true&access_token=dbadb51195d5766b8a201405e801777b46ea19e85203161103ef05aa1cabc19d";





		$responses = file_get_contents($url, true);

		$response = json_decode($responses);





		//dd($response);


		return view('user_detail')->with(compact('response', 'responseshow'));


	}

	public function search(Request $request)
	{



		$url="https://my.tanda.co/api/v2/schedules?user_ids=".request('user_id')."&from=".request('from')."&to=".request('to')."&show_costs=true&include_names=false&access_token=dbadb51195d5766b8a201405e801777b46ea19e85203161103ef05aa1cabc19d";


// //$url= "https://my.tanda.co/api/v2/users/".$request->id."?show_wages=true&access_token=dbadb51195d5766b8a201405e801777b46ea19e85203161103ef05aa1cabc19d";


		$responses = file_get_contents($url, true);
		$responseshow = json_decode($responses);
		$x = 0;
		foreach ($responseshow as $key => $value) {
			$from= (Carbon::createFromTimestamp($value->start)->addhours(8)->toDayDateTimeString());
			$to= (Carbon::createFromTimestamp($value->finish)->addhours(8)->toDayDateTimeString());
			$x++;
		}
		// dd($from, $to);

		//return view('tables_dynamic')->with(compact('responseshow', 'response', '$from', '$to'));







		return view('schedule', compact('responseshow', 'from', 'to'));

	}

}
