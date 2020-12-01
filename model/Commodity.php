<?php

namespace app\shop\model;

use think\Model;

class Commodity extends Model
{
    protected $table='commodity';
    static public function show(){
        return self::select();
    }

}
