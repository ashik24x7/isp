<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Bill;

use DB;

use App\CustomerDetail;
use App\Customer;

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

    public function showReceivePayment(){
        return view('receive-payment');
    }

    public function findUserDataPayment(Request $request){
        $user = DB::select(DB::raw("SELECT `customers`.`user_id`,`customers`.`fk_user_id`,`customer_details`.`username`,`customer_details`.`username`,`customer_details`.`contact_no`,`customer_details`.`house`,`customer_details`.`road`,`customer_details`.`block`,`customer_details`.`address`,`customer_details`.`floor`,`customer_details`.`bill`,`customer_details`.`balance`,`bills`.`pay`,`bills`.`due_after_pay` FROM `customers` LEFT JOIN `customer_details` ON `customers`.`fk_user_id`=`customer_details`.`id` LEFT JOIN `bills` ON `customers`.`user_id`=`bills`.`user_id` WHERE `customers`.`user_id`='{$request->data}' OR `customer_details`.`contact_no`='{$request->data}'"));

        return $user;
    }


    public function ReceivePayment(Request $request){
        $data = [];
        $data['fk_user_id'] = $request->fk_user_id;
        $data['user_id'] = $request->user_id;
        $data['bill'] = $request->bill;
        $data['due'] = !empty($request->due) ? $request->due : 0;
        $data['total'] = $data['bill'] + $data['due'];
        $data['pay'] = $request->payment;
        $data['due_after_pay'] = $data['total'] - $data['pay'];
        $data['tnx'] = $request->tnx." : ".$request->tnx_id;

        $data['updated_by'] = auth()->guard('admin')->user()->id;

        
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $bill = Bill::whereIn('user_id',[$request->user_id])->update($data);

        if($bill){
            
            CustomerDetail::whereIn('id',[$request->fk_user_id])->update([
                'balance' => $data['due_after_pay']
            ]);

            return redirect()->to('receive-payment')->with('message','Payment has made successfully');
        }else{
            return redirect()->to('receive-payment')->with('message','There is an error while payment is processing');
        }

    }


}
