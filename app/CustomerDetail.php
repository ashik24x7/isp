<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class CustomerDetail extends Authenticatable
{
    
    public function customer_id(){
    	return $this->hasOne(Customer::class);
    }

    protected $fillable =[
		'ip',
		'password',
		'username',
		'contact_no',
		'additional_contact_no',
		'email',
		'house',
		'road',
		'block',
		'address',
		'floor',
		'bill',
		'connection_up',
		'connection_establishment_info',
		'connected_from',
		'note',
		'customer_photo',
		'id_or_passport',
    ];

    protected $hidden = [
        'remember_token','password'
    ];

    
}
