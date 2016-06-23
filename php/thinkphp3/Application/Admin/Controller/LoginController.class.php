<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 16-6-15
 * Time: 下午5:32
 */
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{

    private $date;
    private $time;



    public function indexAction(){

        $this->display('index');
    }
}