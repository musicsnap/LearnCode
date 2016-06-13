<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function indexAction(){
        $this->display('index');
    }

    public function mainAction(){
        echo "hello this is a main.html";
        die();
    }
}