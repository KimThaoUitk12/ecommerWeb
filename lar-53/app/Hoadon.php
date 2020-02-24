<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hoadon extends Model
{
    //
    protected $table="hoadon";
     protected $primaryKey = 'mahd';
     protected $fillable = ['mahd', 'tinhtrang'];

    public function Chitiethoadon(){
    	$this->hasMany('App\Chitiethoadon','mahd','mahd');
    }
    public function Khachhang(){
    	$this->belongsto('App\Khachhang','makh','makh');
    }
    public $timestamps = false;
}
