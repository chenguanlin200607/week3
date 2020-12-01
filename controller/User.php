<?php

namespace app\shop\controller;

use app\shop\model\Car;
use app\shop\model\Commodity;
use app\shop\model\Order;
use think\Controller;
use think\Db;
use think\Request;

class User extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        return view('login');
    }
    public function login(Request $request){
        $username=$request->param('username');
        $phone=$request->param('phone');
        $res=\app\shop\model\User::login($username,$phone);
        if ($res){
            return json(['code'=>200,'msg'=>'登录成功','data'=>$res]);
        }else{
            return json(['code'=>500,'msg'=>'登录失败','data'=>null]);
        }
    }
    public function show(){
        $res=Commodity::show();
        return view('show',['arr'=>$res]);
    }
    public function car(Request $request){
        $arr['u_id']=$request->param('u_id');
        $arr['s_id']=$request->param('s_id');
        $arr['num']=$request->param('num');
        $res=Car::add($arr);
        if ($res){
            return json(['code'=>200,'msg'=>'添加成功','data'=>$res]);
        }else{
            return json(['code'=>500,'msg'=>'添加失败','data'=>null]);
        }
    }
    public function order(){
        $res=Order::show();
        return view('order',['arr'=>$res]);
    }
}
