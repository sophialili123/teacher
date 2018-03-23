<?php
namespace app\common\model;
use think\Model;

/**
 * Created by PhpStorm.
 * User: LilyMM
 * Date: 2018/3/22
 * Time: 17:01
 */
class User extends Model
{
    // 设置当前模型对应的完整数据表名称,可以不设，默认为驼峰型，去掉前缀
//    protected $table = 'hs_user';

//    protected $code;
    public function getUser(){
        return 111;
    }
}