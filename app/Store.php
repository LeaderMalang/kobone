<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable =['id','name','heading_1','url','slug','image','status','total_coupon_used_times'];
}
