<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2016/4/1
 * Time: 15:24
 * 这个设置定时脚本的文件
 */

date_default_timezone_set("Asia/Shanghai");
mb_internal_encoding("UTF-8");
$app = new Yaf_Application(APPLICATION_PATH . "/conf/application.ini");
require_once APPLICATION_PATH .'/application/Functions.php';//公共方法函数
require_once APPLICATION_PATH . '/conf/Config.inc.php';//基础配置信息
require_once APPLICATION_PATH . '/conf/defines.inc.php';//系统常量信息
require_once APPLICATION_PATH . '/conf/User.inc.php';//用户配置信息
require_once APPLICATION_PATH . '/conf/Order.inc.php';//订单配置信息
$app->bootstrap();
$_SERVER['REMOTE_ADDR'] = '127.0.0.1';
