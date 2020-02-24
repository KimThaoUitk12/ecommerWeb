<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chitiethoadon extends Model
{
    //
    protected $table="chitiethoadon";

    public function Sanpham(){
    	$this->hasOne('App\Sanpham','masp','masp');
    }
    public function Hoadon(){
    	$this->belongsto('App\Hoadon','mahd','mahd');
    }
}
