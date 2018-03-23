<?php
namespace app\frontend\controller;

use think\Controller;

class Index extends Controller
{
    //前置方法,需要控制器继承Controller
    protected $beforeActionList = [
        'first',
        'second' =>  ['except'=>'index2'],
        'three'  =>  ['only'=>'test'],
    ];

    protected function first(){
        echo '我是first前置行为方法<br/>';
    }

    protected function second(){
        echo '我是second前置行为方法<br/>';
    }

    protected function three(){
        echo '我是three前置行为方法<br/>';
    }

    public function index()
    {
        return '我是frontend的index的index方法';
    }

    public function index2(){
        return '我是frontend的index的index2方法';
    }

    public function test($id,$name){
        return $id.$name;
    }
}
