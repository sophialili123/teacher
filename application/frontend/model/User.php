<?php
namespace app\frontend\model;
use think\Model;

/**
 * Created by PhpStorm.
 * User: LilyMM
 * Date: 2018/3/22
 * Time: 17:01
 */
class User extends Model
{
    // 设置当前模型对应的完整数据表名称
    protected $table = 'hs_user';

    protected $pk = 'userId';

}