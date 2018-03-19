<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return 222;
    }

    public function test(){
        return 444;
    }
    public function  get($id){
        return 9999;
    }

    public function hello($id){
        return $id;
    }
}
