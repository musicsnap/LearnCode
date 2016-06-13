<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function indexAction(){
        echo "这是后台默认的首页!";
        die();
    }
}