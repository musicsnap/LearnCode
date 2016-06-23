<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 16-6-13
 * Time: 下午5:36
 * 用户管理
 */
namespace Admin\Controller;
use Think\Controller;

class UserController extends Controller{

    public function userlistAction(){
        echo "hello this is a userlist.html";
        die();
    }

    public function adduserAction(){
        echo "hello this is a adduser.html";
        die();
    }
}