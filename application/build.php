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

return [
    // 生成应用公共文件
//    '__file__' => ['common.php', 'config.php', 'database.php'],

    // 其他更多的模块定义
//    'frontend'     => [
//        '__file__'   => ['common.php','database.php'],
//        '__dir__'    => ['behavior', 'controller', 'model', 'view'],
//        'controller' => ['Index', 'Test', 'UserType'],
//        'model'      => ['User', 'UserType'],
//        'view'       => ['index/index'],
//    ],
//    'backend'     => [
//        '__file__'   => ['common.php','database.php'],
//        '__dir__'    => ['behavior', 'controller', 'model', 'view'],
//        'controller' => ['Index',  'UserType'],
//        'model'      => ['Admin', 'AdminType'],
//        'view'       => ['index/index'],
//    ],
    'demo'     => [
        '__file__'   => ['common.php','database.php'],
        '__dir__'    => ['behavior', 'controller', 'model', 'view'],
        'controller' => ['Index',  'UserType'],
        'model'      => ['Admin', 'AdminType'],
        'view'       => ['index/index'],
    ],
];
