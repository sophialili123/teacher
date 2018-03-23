<?php
namespace app\frontend\controller;

use app\common\model\User;
use think\Controller;
use think\Loader;
use think\Request;
use think\Validate;

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
        $request = Request::instance();
        if($request->isPost()){

            //最原始的方式：字段非常多时，很耗人力
//            $user = new User();
//            $user->phone = 123;
//            $user->save();

            //验证器规则使用
//            $validate = Loader::validate('User');
//            if(!$validate->check($request->post())){
//                print_r($validate->getError());die;
//            }

            //单独对code字段进行闭包函数验证
//            $validate = new Validate([
//                'code'  => function($value,$data) {
//                    return '111111'==$value ? '@_@' : '^_^';
//                },
//            ]);
//            $result = $validate->check($request->post());
//            print_r($validate->getError());die;

            //如果没有使用验证器类，则支持使用extend方法扩展验证规则
//            $validate = new Validate(['username' => 'checkName:1']);
//            $validate->extend('checkName', function ($value, $rule) {
//                return $rule == $value ? 'right' : 'error';
//            });
//            $result = $validate->check($request->post());
//            print_r($validate->getError());die;

            //升级版方式：过滤post数组中的非数据表字段数据
            $user = new User($request->post());
            $user->allowField(true)->save();

            // 使用 Loader 类实例化（单例）
            // 主要用于调用模型的自定义方法
//            $user = Loader::model('User');
//            echo $user->getUser();die;

        }

        return $this->fetch('reg',['title'=>'注册']);
    }
}
