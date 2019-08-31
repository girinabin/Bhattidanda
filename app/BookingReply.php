<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingReply extends Model
{
     protected $guarded = [];
	
     public function getactiveAttribute($attribute){
        return[
            0 => 'Pending',
            1 =>'Approved'
        ][$attribute];
    }
}
