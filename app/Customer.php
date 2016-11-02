<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

	protected $fillable = [];
	protected $hidden = [];
	protected $dates = [];

    
    public function customer(){
		return $this->belongsTo('App\CustomerDetail','fk_user_id');
	}
}
