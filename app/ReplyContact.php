<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReplyContact extends Model
{
    protected $guarded = [];
	
     public function getactiveAttribute($attribute){
        return[
            0 => 'Pending',
            1 =>'Replyed'
        ][$attribute];
    }
}
