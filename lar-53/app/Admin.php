<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $table="admin";

    public function Taikhoan(){
    	return $this->hasOne('App\Taikhoan','tentk','tentk');
    }

}
