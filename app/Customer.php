<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

	protected $fillable = ['user_id','fk_user_id','updated_by'];
	protected $hidden = [];
	protected $dates = [];

    
    public function customer(){
		return $this->belongsTo('App\CustomerDetail','fk_user_id');
	}
}
