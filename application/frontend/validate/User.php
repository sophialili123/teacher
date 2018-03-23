<?php
namespace app\frontend\validate;
use think\Validate;

/**
 * Created by PhpStorm.
 * User: LilyMM
 * Date: 2018/3/23
 * Time: 14:25
 * 验证器
 */
class User extends Validate
{
    //验证规则
    protected $rule = [
        'username'  =>  'require|length:4,25|checkName:thinkphp',
        'phone' =>  'regex:/^1[345789][0-9]{9}$/',
    ];

    //验证提示
    protected $message = [
        'username.require'  =>  'username is require',
        'phone' =>  'phone is wrong',
        'email' => 'email is wrong',
        'sex' => 'sex is wrong'
    ];

    //场景验证
    protected $scene = [
        'add'   =>  ['username','phone'],
        'edit'  =>  ['email','sex'],
    ];

    // 自定义验证规则
    protected function checkName($value,$rule,$data)
    {
        return $rule == $value ? true : '名称错误';
    }
}