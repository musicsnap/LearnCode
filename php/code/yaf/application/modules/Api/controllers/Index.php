<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 16-5-26
 * Time: 下午4:07
 */
class IndexController extends Controller{
    public function init(){}


    public function indexAction(){
        //远程服务请求
        $host = "";
        $service = new Yar_Server($host);
        $service->handle();

    }

    public function searchAction(){
        echo "=================IndexSearch";

        die();
    }
}