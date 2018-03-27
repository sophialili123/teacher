<?php
/**
 * Created by PhpStorm.
 * User: LilyMM
 * Date: 2018/3/27
 * Time: 13:31
 * 公共模型类
 */

namespace app\common\model;

use think\Model;

class Common extends Model
{
    protected $autoWriteTimestamp = true;
    public function add($data) {
        $data['status'] = 0;
        $this->save($data);
        return $this->id;
    }

    public function updateById($data, $id) {
        return $this->allowField(true)->save($data, ['id'=>$id]);
    }
}