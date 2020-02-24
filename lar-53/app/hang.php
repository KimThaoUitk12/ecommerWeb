<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hang extends Model
{
    //
    protected $table="hang";
      protected $primaryKey = 'mahang';
      protected $fillable = ['mahang', 'tenhang'];
    public function Sanpham(){
    	return $this->hasMany('App\Sanpham','hang','mahang');
    }
   
    public $timestamps = false;
}
