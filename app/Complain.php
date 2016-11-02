<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Complain extends Model
{
	
    protected $fillable = [
		'user_id',
		'username',
		'contact_no',
		'connected_from',
		'complain',
		'support_given_by',
		'received_by',
		'solved_by',
		'created_at'
	];

	protected $dates = [];

	public function received(){
		return $this->belongsTo('App\User','received_by');
	}
	
	public function solved(){
		return $this->belongsTo('App\User','solved_by');
	}

	public function scopeToday($query){
		$query->where('created_at', '>=', Carbon::today()->toDateString())->orderBy('created_at','DESC');
	}
	public function scopeWeek($query){
		$query->where('created_at', '>=', Carbon::week()->toDateString())->orderBy('created_at','DESC');
	}
	public function scopeMonth($query){
		$query->whereMonth('created_at', '=', date('m'))->orderBy('created_at','DESC');
	}
	public function scopeYear($query){
		$query->whereYear('created_at', '=', date('Y'))->orderBy('created_at','DESC');
	}
	public function scopeAll($query){
		$query->orderBy('created_at','DESC');
	}
	
}
