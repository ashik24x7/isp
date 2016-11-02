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

		$data['complain_by'] = auth()->guard('admin')->user()->id;

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

		$data = $request->only('user_id','username','contact_no','connected_from','created_at');
		$data ['category'] = $request->complain['category'];
		$data['complain'] = serialize($request->complain);
		$data['received_by'] = auth()->guard('admin')->user()->id;

		$validator = Validator::make($data,[
			'user_id' => 'required',
			'username' => 'required',
			'contact_no' => 'required|max:11',
			'connected_from' => 'required',
			'category' => 'required'
    	]);

    	unset($data ['category']);

    	if($validator->fails()){
    		return redirect()->back()->withErrors($validator)->withInput();
    	}

		$complain = new Complain;

		if($complain->create($data)){
			return redirect()->to('/complains/today')->with('message','Your complain has created successfully');
		}else{
			return redirect()->to('/receive-complain')->with('message','There was a problem while creating complain');
		}
	}

	public function findUserData(Request $request){
		$user = DB::table('customer_details')
				->where('user_id','=',$request->data)
				->get();

		if(!$user){
			$user = DB::table('customer_details')
				->where('contact_no','=',$request->data)
				->get();
		}
		return $user;
	}

	public function complains($data){
		if($data == 'today'){
			$complains = Complain::with(['received','solved'])->today()->paginate(10);
		}if($data == 'week'){
			$complains = Complain::with(['received','solved'])->today()->paginate(10);
		}elseif($data == 'month'){
			$complains = Complain::with(['received','solved'])->month()->paginate(10);
		}elseif($data == 'year'){
			$complains = Complain::with(['received','solved'])->year()->paginate(10);
		}elseif($data == 'all'){
			$complains = Complain::with(['received','solved'])->all()->paginate(10);
		}

		return view('complains',compact('complains'))->with(['data'=>$data]);
	}


	public function solved($id){

		$complain = Complain::findOrFail($id);
		$complain->solved_by = auth()->guard('admin')->user()->id;
		$complain->save();

		return redirect()->to('/complains')->with('message','The complain has solved');

	}

	public function viewEditComplain($id){
		$complain = Complain::find($id);
		if($complain == null){
			return redirect()->to('/complains/today');
		}else{
			$complain_text = unserialize($complain->complain);
			$complain['category'] = $complain_text['category'];
			$complain['body'] = $complain_text['body'];
			return view('/edit-complain',compact('complain'));
		}
	}

	public function editComplain(Request $request,$id){
		$data = $request->only('user_id','username','contact_no','connected_from','support_given_by');
		$data ['category'] = $request->complain['category'];
		$data['complain'] = serialize($request->complain);

		$validator = Validator::make($data,[
			'user_id' => 'required',
			'username' => 'required',
			'contact_no' => 'required|max:11',
			'connected_from' => 'required',
			'support_given_by' => 'required',
			'category' => 'required'
    	]);

    	unset($data ['category']);

    	if($validator->fails()){
    		return redirect()->back()->withErrors($validator)->withInput();
    	}

		$complain = Complain::find($id);
		if($complain == null){
			return redirect()->to('/complains');
		}else{
			$complain->update($data);
			return redirect()->to('/complains');
		}
	}


	public function filterComplain($data){
		if($data == 'week'){
			$complains = Complain::with(['received','solved'])->today()->get();
			return view('complains',compact('complains'));
		}elseif($data == 'month'){
			$complains = Complain::with(['received','solved'])->month()->get();
			return view('complains',compact('complains'));
		}elseif($data == 'year'){
			$complains = Complain::with(['received','solved'])->year()->get();
			return view('complains',compact('complains'));
		}

	}


}
