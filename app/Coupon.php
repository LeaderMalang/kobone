<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable=['id','name','description','status','coupon_type','coupon_status','coupon_code','discount_amount','coupon_url','coupon_used_times','slug','store_id'];
}
