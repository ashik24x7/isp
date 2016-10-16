<?php

namespace App\Http\Controllers;

use App\CustomerDetail;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CustomerRequest;
use Mail;
use Validator;
use Auth;

class CustomerController extends Controller
{
    public function __construct(){
        $this->middleware('customerAuth');
    }

	public function index(){
    	return view('customer-register');
    }

    public function store(CustomerRequest $request){

        $data = $request->all();

        $data['password'] = str_random(6);



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
    	if($customer->create($data)){
            $contents = '<h3>Hi '.$data['username'].', Your account has been successfully created. </h3>';
            $contents .= 'All the information of your account are given below<br><br><br>';
            $contents .= 'Contact No: '.$data['contact_no'].'<br><br>';
            $contents .= 'Temporary Password: '.$data['password'].' <small style=\'color:red\'>*You should change this</small><br><br>';
            $contents .= 'Your Monthly bill is: '.$data['bill'].' TK<br><br>';
            $contents .= 'Your connection is establish at: '.date('d-m-Y',strtotime($data['connection_up'])).'<br><br><br>';
            $contents .= 'Thanks for being with us hope you will enjoy our services.<br><br>';
            $contents .= 'Regards<br>';
            $contents .= 'Exord Online Team';

            //return $contents;
            Mail::send('mail.mail', ['data'=>['message'=>$contents]], function($mail){
                $mail->to('ashik24x7@gmail.com')->from('no-reply@exordonline.com','Exord Online Limited')->subject('Account Confirmation');
            });
    		return redirect()->to('/register')->with('message','Sucessfully registered');

    	}else{

    		return redirect()->back()->withInput()->with('message','There was an error while create customer');

    	}


    }


    public function dashboard(){
        $customer = Auth::user();
        // dd($customer);
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
        
        if(\Auth::attempt($data)){
            return redirect()->to('customer-home');
        }else{
            return redirect()->to('/customer-login')->with('message','Email/Password Wrong!');
        }
    }


    public function customerLoginView(){
        return view('customer-login');
    }


}
