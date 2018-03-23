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

//完整域名绑定到app模块
Route::domain('app.teacher.com','appv1');
//完整域名绑定到backend模块
Route::domain('admin.teacher.com','backend');

Route::rule('hello/:name','frontend/Index/hello','POST/GET');
Route::rule('user/:id','frontend/Index/index');

Route::rule('login','frontend/Home/login');
Route::rule('register','frontend/Home/register');

//Index模块
Route::rule('index/index','frontend/Index/index');
Route::rule('index/index2','frontend/Index/index2');


return [
    //检查变量规则
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[User]'     => [
        ':id'   => ['frontend/index/Index', ['method' => 'get'], ['id' => '\d+']],
    ],
    '[old]'     => [
        ':id'   => ['backend/Index/hello', ['method' => 'get'], ['id' => '\d+']],
    ]
];
