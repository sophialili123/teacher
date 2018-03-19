<?php
namespace app\frontend\controller;

class Index
{
    public function index()
    {
        return '我是frontend的index方法';
    }

    public function test($id,$name){
        return $id.$name;
    }
}
