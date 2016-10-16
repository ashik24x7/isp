<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Http\Requests;

use App\Complain;

use DB;

use Auth;

use Carbon\Carbon;

class ComplainController extends Controller
{
   	public function __construct(){
   		date_default_timezone_set("Asia/Dhaka");
   	}

	public function index(){
		return view('compose-complain');
	}

	public function store(Request $request){
		
		$this->validate($request,[
			'subject' => 'required',
			'complain' => 'required'
		]);
		$data = $request->only('subject','complain');

		$data['complain_by'] = \Auth::user()->id;

		$complain = new Complain;

		if($complain->create($data)){
			return redirect()->to('/compose-complain')->with('message','Your complain has submitted. Our executive will contact with you very soon');
		}else{
			redirect()->intendend('/compose-complain')->withInput()->with('message','There was a problem while creating complain');
		}
	}

	public function receiveComplain(){
		return view('receive-complain');
	}

	public function postReceiveComplain(Request $request){

		$data = $request->only('user_id','username','contact_no','created_at');
		$data['complain'] = serialize($request->complain);
		$data['received_by'] = \Auth::user()->id;

		// $validator = Validator::make($request->all(),[
		// 	'user_id' => 'required',
		// 	'username' => 'required',
		// 	'contact_no' => 'required|max:11'
  //   	]);

  //   	if($validator->fails()){
  //   		return redirect()->back()->withErrors($validator)->withInput();
  //   	}

		$complain = new Complain;

		if($complain->create($data)){
			return redirect()->to('/complains')->with('message','Your complain has created successfully');
		}else{
			return redirect()->to('/receive-complain')->with('message','There was a problem while creating complain');
		}
	}

	public function findUserData(Request $request){
		$user = DB::table('customer_details')->where('user_id',$request->user_id)->get();
		return $user;
	}

	public function complains(){
		$complains = DB::table('complains')->latest()->get();
		return view('complains',compact('complains'));
	}
}
