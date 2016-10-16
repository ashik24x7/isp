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
		'complain',
		'support_given_by',
		'received_by',
		'solved_by',
		'created_at'
	];

	protected $dates = [];

	public function scopeLatest($query){
		$query->orderBy('created_at','DESC');
	}

	// public function setCreatedAtAttribute($date){
	// 	$this->attributes['created_at'] = Carbon::createFromFormat('Y-m-d',$date);
	// }
	
}
