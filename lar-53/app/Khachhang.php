<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khachhang extends Model
{
    //
    protected $table="khachhang";

    // public function Taikhoan(){
    // 	return $this->hasOne('App\Taikhoan','tentk','tentk');
    // }
    public function Hoadon(){
    	return $this->hasMany('App\hoadon','makh','makh');
    }
}
