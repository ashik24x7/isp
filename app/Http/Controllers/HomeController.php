<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Carbon\Carbon;

use DB;

class HomeController extends Controller
{
	private function amount($n) {
        // first strip any formatting;
        $n = (0+str_replace(",","",$n));
        
        // is this a number?
        if(!is_numeric($n)) return false;
        
        // now filter it;
        if($n>1000000000000) return round(($n/1000000000000),1).' trillion';
        else if($n>1000000000) return round(($n/1000000000),1).' billion';
        else if($n>1000000) return round(($n/1000000),1).' million';
        else if($n>1000) return round(($n/1000),1).' k';
        
        return number_format($n);
    }

    public function home(){
    	$data['complain'] = \DB::table('complains')->where('solved_by',null)->count();
    	$data['unpaid_bill'] = \DB::table('bills')->where('updated_at','=',NULL)->count();
		$today_income = \DB::table('bills')->whereDay('updated_at', '=', date('d'))->sum('bill');
		$data['today_income'] = $this->amount($today_income);

		$this_month_collection = \DB::table('bills')->whereMonth('updated_at', '=', date('m'))->sum('bill');
		$data['this_month_collection'] = $this->amount($this_month_collection);

		$month_revenue = \DB::table('customer_details')->sum('bill');
		$data['month_revenue'] = number_format($month_revenue);


    	return view('home',$data);
    }
}
