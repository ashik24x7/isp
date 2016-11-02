<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Http\Requests;

use App\User;

class UserController extends Controller
{

    public function __construct(){
        // $this->middleware('auth',['except' => ['logout','userLoginView']]);
    }
    
    public function userRegistration(Request $request){

    	$validator = Validator::make($request->all(),[
            'name' => 'required|max:100',
			'username' => 'required|unique:users',
			'password' => 'required',
			're_pass' => 'required|same:password'
    	]);

    	if($validator->fails()){
    		return redirect()->back()->withErrors($validator)->withInput();
    	}

        $data = $request->all();
        $data['password'] = bcrypt($request->input('password'));
        $data['photo'] = "";

        $photo = request()->file('photo');
        if($photo){
            $photo_name = str_random(20).'.'.$photo->extension();

            if($photo->move(public_path('photo/admin-photo'),$photo_name)){
                 $data['photo'] = $photo_name;
                 User::create($data);
                 if($this->userLogin($request)){
                    return redirect()->to('/home')->with('message','Sucessfully registered');
                 }
                 return redirect()->to('/register')->with('message','Login Failed');
            }else{
                return $photo->getErrorMessage();
            }
        }



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
        if(\Auth::guard('admin')->attempt($data)){
            return redirect()->intended('home');
        }else{
            return redirect()->to('/login')->with('message','Username/Password Wrong!');
        }

    }

    public function userLoginView(){
        return view('login');
    }

    public function logout(){
        auth()->guard('admin')->logout();
        return redirect()->to('login'); 
    }



}
