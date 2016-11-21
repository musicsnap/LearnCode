<?php

header("Content-Type: text/html;Charset=UTF-8");
define("APPLICATION_PATH",  realpath(dirname(__FILE__) . '/..'));
define('BASE_PATH', substr(__FILE__, 0, strrpos(__FILE__, DIRECTORY_SEPARATOR . '')));
define('IMAGES_DIR',dirname(dirname(__DIR__)).'/sumi_photo');//这个定义图片的上传目录
$application  = new Yaf_Application(APPLICATION_PATH . "/conf/application.ini",$section = 'product');
//加载配置文件信息
require_once APPLICATION_PATH .'/application/Functions.php';//公共方法函数
require_once APPLICATION_PATH . '/conf/menu.inc.php';//菜单配置信息
require_once APPLICATION_PATH . '/conf/Config.inc.php';//基础配置信息
require_once APPLICATION_PATH . '/conf/defines.inc.php';//系统常量信息
require_once APPLICATION_PATH . '/conf/User.inc.php';//用户配置信息
require_once APPLICATION_PATH . '/conf/Order.inc.php';//订单配置信息

$response = $application
    ->bootstrap()/*bootstrap是可选的调用*/
    ->run()/*执行*/;


