<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
//this is test git
// 应用入口文件
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
define('ROOT_PATH',     __DIR__.'/');//设置顶级目录
// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',true);
//公共配置目录
define('COMMON_PATH',ROOT_PATH.'Common/');
// 定义应用目录
define('APP_PATH',ROOT_PATH.'/Application/');
//定义附件保存位置
define('UPLOAD_PATH', ROOT_PATH.'/Uploads');

//定义附件保存位置
define('UPLOAD_URL', '/Uploads/');
//地址
define('M_URL','http://m.mjzkw.com/');
define('P_URL','http://www.mjzkw.com/');
// 引入ThinkPHP入口文件
require ROOT_PATH.'/ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单