<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

////完整域名绑定到app模块
//Route::domain('app.teacher.com','appv1');
//// 完整域名绑定到backend模块
//Route::domain('admin.teacher.com','backend');

Route::rule('hello/:name','frontend/Index/hello','POST/GET');
Route::rule('user/:id','frontend/Index/index');


return [
    '[User]'     => [
        ':id'   => ['appv1/Home/hello', ['method' => 'get'], ['id' => '\d+']],
    ],
];
