<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magiamgia extends Model
{
    //
    protected $table="magiamgia";
    public function Sanpham(){
    	return $this->belongsto('App\Sanpham','masp','masp');
    }
}
