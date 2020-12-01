<?php

namespace app\shop\model;

use think\Model;

class Car extends Model
{
    protected $table='car';
    static public function add($arr){
        return self::insert($arr);
    }
}
