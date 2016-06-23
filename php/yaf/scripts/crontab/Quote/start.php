<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2016/4/1
 * Time: 15:27
 */
define("APPLICATION_PATH", realpath(dirname(__FILE__) . '/../../../')); //指向public的上一级
require APPLICATION_PATH . '/scripts/crontab/crontab.php';
$user = new TestModel();
$data = $user->getList();
var_dump($data);
die();



