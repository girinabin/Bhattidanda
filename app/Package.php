<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
   protected $guarded = [];

    public function getactiveAttribute($attribute){
        return[
            0 => 'Unavailable',
            1 =>'Available'
        ][$attribute];
    }
   // public function getRouteKeyName()
   //  {
   //      return 'id';
   //  }

}
