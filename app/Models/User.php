<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //与模型关联的数据表
    protected $table = 'users';
    //是否开启自动维护的时间戳
    public $timestamps = false;
    //可以被批量赋值的属性
    protected $fillable = ['username','pawwsord','email','status','token','phone'];
}
