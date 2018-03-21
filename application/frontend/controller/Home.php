<?php
namespace app\frontend\controller;

use think\Controller;

class Home extends Controller
{
    public function index()
    {
        return '我是frontend下的home的index方法';
    }

    public function test($id,$name){
        return $id.$name;
    }

    public function login(){
        return $this->fetch('index',['title'=>'登录']);
    }
}
