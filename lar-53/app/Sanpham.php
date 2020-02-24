<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    //
    protected $table="sanpham";
    protected $primaryKey = 'masp';
     protected $fillable = ['masp', 'TENSP','mota','hang','gia',
     'GIAKHUYENMAI','cameratruoc','camerasau','RAM','manhinh'];

    public function anh(){
    	return $this->hasMany('App\anh','masp','masp');
    }
    public function chitiethoadon(){
    	return $this->belongsto('App\chitiethoadon','masp','masp');
    }
    public function Magiamgia(){
    	return $this->hasMany('App\Magiamgia','masp','masp');
    }
    public function Hang(){
        return $this->belongsto('App\hang','mahang','hang'); 
    }
    public $timestamps = false;
}
