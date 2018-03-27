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
Route::domain('api.teacher.com','api');
//完整域名绑定到backend模块
Route::domain('bis.teacher.com','bis');
Route::domain('admin.teacher.com','admin');
//
//Route::rule('hello/:name','frontend/Index/hello','POST/GET');
//Route::rule('user/:id','frontend/Index/index');
//
//Route::rule('login','frontend/Home/login');
//Route::rule('register','frontend/Home/register');
//
////Index模块
//Route::rule('index/index','frontend/Index/index');
//Route::rule('index/index2','frontend/Index/index2');


return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];