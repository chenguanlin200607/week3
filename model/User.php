<?php

namespace app\shop\model;

use think\Model;

class User extends Model
{
    protected $table='user';
    static public function login($username,$phone){
        return self::where('username',$username)
            ->where('phone',$phone)
            ->find();
    }
}
