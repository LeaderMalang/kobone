<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =['id','name','slug'];

    public function store()
    {
        return $this->belongsToMany('App\Store');
    }
}
