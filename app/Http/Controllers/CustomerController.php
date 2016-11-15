<?php

namespace App\Http\Controllers;

use App\CustomerDetail;
use App\Customer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CustomerRequest;
use Mail;
use Validator;
use Auth;
use DB;

class CustomerController extends Controller
{
    public function __construct(){
        // $this->middleware('customerAuth');
    }

	public function index(){
    	return view('customer-register');
    }

    public function store(CustomerRequest $request){

        $data = $request->all();

        $data['password'] = bcrypt('pass');



    	$customer_photo = request()->file('customer_photo');
        if($customer_photo){
            $customer_photo_name = str_random(20).'.'.$customer_photo->extension();
            if($customer_photo->move(public_path('photo/customer-photo'),$customer_photo_name)){
                 $data['customer_photo'] = $customer_photo_name;
            }else{
                return $customer_photo->getErrorMessage();
            }
        }




        $id_or_passport = request()->file('id_or_passport');

        if($id_or_passport){
            $id_or_passport_name = str_random(21).'.'.$id_or_passport->extension();
            if($id_or_passport->move(public_path('photo/id'),$id_or_passport_name)){
                 $data['id_or_passport'] = $id_or_passport_name;
            }else{
                return $id_or_passport->getErrorMessage();
            }
        }



    	$customer = new CustomerDetail;
    	if($user = $customer->create($data)){
            $email = !empty($data['email']) ? $data['email'] : "";

            $contents = '<h3>Hi '.$data['username'].', Your account has been successfully created. </h3>';
            $contents .= 'All the information of your account are given below<br><br><br>';
            $contents .= 'Customer ID: '.$user->id.'<br><br>';
            $contents .= 'Contact No: '.$data['contact_no'].'<br><br>';
            $contents .= 'Temporary Password: pass <small style=\'color:red\'>*You should change this</small><br><br>';
            $contents .= 'Your Monthly bill is: '.$data['bill'].' TK<br><br>';
            $contents .= 'Your connection is establish at: '.date('d-m-Y',strtotime($data['connection_up'])).'<br><br><br>';
            $contents .= 'Thanks for being with us hope you will enjoy our services.<br><br>';
            $contents .= 'Regards<br>';
            $contents .= 'Exord Online Team';

            //return $contents;
            if($email){
                Mail::send('mail.mail', ['data'=>['message'=>$contents]], function($mail) use($email){
                    $mail->to($email)->from('no-reply@exordonline.com','Exord Online Limited')->subject('Account Confirmation');
                });
            }
    		return redirect()->to('/home')->with('message','ID# '.$user->id.' has registered sucessfully');

    	}else{

    		return redirect()->back()->withInput()->with('message','There was an error while create customer');

    	}


    }


    public function dashboard(){
        $customer = Auth::guard('customer')->user();
        
        return view('user-profile', compact('customer'));
    }


    public function customerLogin(Request $request){
        
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $data = $request->only('email','password');

        if(\Auth::guard('customer')->attempt($data)){
            return redirect()->to('customer-home');
        }else{
            return redirect()->to('/customer-login')->withInput()->with('message','Email/Password Wrong!');
        }
    }


    public function customerLoginView(){
        return view('customer-login');
    }

    public function customerLogout(){
        \Auth::guard('customer')->logout();
        return redirect()->to('/customer-login');
    }

    public function customers(){
        $customers = Customer::with('customer')->paginate(10);
        return view('customers',compact('customers'));
    }

    public function addCustomersIntoExord(){
        $customer = DB::select(DB::raw('SELECT `customer_details`.`id`,`customer_details`.`user_id`,`customers`.`user_id`,`customer_details`.`username`,`customers`.`fk_user_id` FROM `customer_details` LEFT JOIN `customers` ON `customer_details`.`id`=`customers`.`fk_user_id` WHERE `customers`.`fk_user_id` IS NULL'));
        
        $exord = Customer::where('fk_user_id',0)->get();
        
        return view('add-into-exord-id',compact('exord','customer'));
    }

    public function saveCustomersIntoExord(Request $request){
        $customer = Customer::where('user_id',$request->exord_id)->first();
        $customer->fk_user_id = $request->user_id;
        $customer->updated_by = auth()->guard('admin')->user()->id;
        $customer->save();

        return redirect()->to('customers')->with('message','User ID: '.$request->user_id.' has added to '.$request->exord_id);

    }


    public function search(Request $request){
        $customers = Customer::with('customer')->where('user_id','=',$request->user_id)->paginate(10);
        return view('customers',compact('customers'));
    }


}
