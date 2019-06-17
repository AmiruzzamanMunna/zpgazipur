<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagecategory extends Model
{
    protected $table="zp_pagecategory";
    
    public function othercat(){
        return $this->hasMany(Otherpages::class,'page_category_id','id');
    }
    public $timestamps=false;
}
