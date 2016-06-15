<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    //控制器初始化
    public function _initialize(){

    }

    public function indexAction(){
        $this->display('index');
    }

    public function mainAction(){
        echo "hello this is a main.html";
        die();
    }


}