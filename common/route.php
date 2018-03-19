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

Route::rule('hello/:name','frontend/Index/hello','POST/GET');
Route::rule('user/:id','frontend/Index/index');


return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[news]'     => [
        ':id'   => ['frontend/index/Index', ['method' => 'get'], ['id' => '\d+']],
    ],
    '[old]'     => [
        ':id'   => ['backend/Index/hello', ['method' => 'get'], ['id' => '\d+']],
    ]

];
