<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table="zp_menu";
    public function submenus(){
        return $this->hasMany(Submenu::class,'menu_id','id');
    }
    public $timestamps=false;
}
