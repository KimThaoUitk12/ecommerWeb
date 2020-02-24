<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anh extends Model
{
    //
    protected $table="anh";

    public function Sanpham(){
    	return $this->belongsto('App\Sanpham','masp','masp');
    }
}
