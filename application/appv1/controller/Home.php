<?php
namespace app\appv1\controller;

use think\controller\Rest;

class Home extends Rest
{
    public function index()
    {
        return '我是backend的home的index方法';
    }

    public function hello($id){
        return '我是backend的hello方法'.$id;
    }

    public function get(){

    }
}
