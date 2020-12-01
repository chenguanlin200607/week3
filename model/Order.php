<?php

namespace app\shop\model;

use think\Model;

class Order extends Model
{
    protected $table='order';
    static public function show(){
        return self::select();
    }
}
