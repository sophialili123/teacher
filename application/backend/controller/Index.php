<?php
namespace app\backend\controller;

class Index
{
    public function index()
    {
        return '我是backend的index方法';
    }

    public function hello($id){
        return '我是backend的hello方法'.$id;
    }
}
