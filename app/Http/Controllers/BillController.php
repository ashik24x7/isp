<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Bill;

use DB;

class BillController extends Controller
{
    public function showBills(){
    	$bills = Bill::all();
    	return view('this_month_bill',compact('bills'));
    }

    public function billPay(Request $request){
    	if(empty($request->user_id)){
    		return redirect()->to('bills');
    	}
    	$id = explode(" ",$request->user_id);
    	$bill = Bill::whereIn('user_id',$id)->increment('hit',1,[
    		'bill' => 'Paid',
    		'updated_by' => auth()->guard('admin')->user()->id
    	]);

    	if($bill){
    		return redirect()->to('bills')->with('success_message','Payment has made successfully');
    	}else{
    		return redirect()->to('bills')->with('error_message','There was an error while processing payment');
    	}
    }

    public function billReset(Request $request){
    	if(isset($request->reset)){
    		DB::table('bills')->update([
    			'bill' => NULL,
    			'hit' => 0,
    			'updated_by' => auth()->guard('admin')->user()->id
    		]);

    		return redirect()->to('bills')->with('message','All bill has reset successfully');

    	}else{
    		return redirect()->to('bills');
    	}

    }


}
