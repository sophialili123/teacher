<?php
namespace app\frontend\controller;

use think\Controller;
use think\Request;

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
        return $this->fetch('login',['title'=>'登录']);
    }

    public function register(){
        $data = Request::instance()->param();
        print_r(Request::instance()->param());
        return $this->fetch('reg',['title'=>'注册']);
    }
}
