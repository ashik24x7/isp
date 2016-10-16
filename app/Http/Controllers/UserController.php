<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Http\Requests;

use App\User;

class UserController extends Controller
{

    
    
    public function userRegistration(Request $request){

    	$validator = Validator::make($request->all(),[
			'username' => 'required|unique:users',
			'password' => 'required',
			're_pass' => 'required|same:password'
    	]);

    	if($validator->fails()){
    		return redirect()->back()->withErrors($validator)->withInput();
    	}

    	User::create([
    		'username' => $request->input('username'),
    		'password' => bcrypt($request->input('password'))
    	]);

    	return redirect()->to('/register')->with('message','Sucessfully registered');

    }


    public function userView(){

    	$user = User::all();

    	return view('/register',compact('user'));
    }


    public function userLogin(Request $request){

        $validator = Validator::make($request->all(),[
            'username' => 'required',
            'password' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        
        $data = $request->only('username','password');
        if(\Auth::attempt($data)){
            return redirect()->to('home');
        }else{
            return redirect()->to('/login')->with('message','Username/Password Wrong!');
        }

    }

    public function userLoginView(){
        return view('login');
    }

    public function logout(){
        \Auth::logout();
        return redirect()->to('login'); 
    }



}
