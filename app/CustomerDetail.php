<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class CustomerDetail extends Model implements Authenticatable
{
	use \Illuminate\Auth\Authenticatable;
    
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
