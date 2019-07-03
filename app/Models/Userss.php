<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Userss extends Model
{
    protected $table = 'userss';
    protected $primaryKey="id";
    public $timestamps = false;

    protected $fillable = ['username',"password","email","phone","created_at","updateed_at"];

    public function getStatusAttribute($value){
    	$status=[0=>"禁用",1=>"开启"];
    	return $status[$value];
    }
}
