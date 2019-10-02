<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Store extends Model
{

    protected $fillable =['id','name','heading_1','url','slug','image','status','total_coupon_used_times'];


    public function categories()
    {
        return $this->belongsToMany('App\Category', 'store_categories', 'category_id', 'store_id');
    }
    public function coupons()
    {
        return $this->hasMany('App\Coupon');
    }
}
