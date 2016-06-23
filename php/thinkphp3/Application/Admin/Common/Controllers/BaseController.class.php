<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 16-6-15
 * Time: 下午5:17
 */
namespace Admin\Common\Controllers;
use Think\Controller;

class BaseController extends Controller{
    /**
     *这个是作为基础控制器，包含一些公共的一些逻辑处理
     */
    public function _initialize(){
        //1.如何获取session,以及session的判断处理；作为判断登录的条件
        //2.权限控制的处理
        //3.访问安全设置


    }


    /**
     *检查用户是否登录
     */
    public function checkLogion(){
        if (!empty($_COOKIE[$this->loginMarked])) {
            $cookie = explode("_", $_COOKIE[$this->loginMarked]);
            $timeout = C("TOKEN");
            if (time() > (end($cookie) + $timeout['admin_timeout'])) {
                setcookie("$this->loginMarked", NULL, -3600, "/");
                unset($_SESSION[$this->loginMarked], $_COOKIE[$this->loginMarked]);
                $this->error("登录超时，请重新登录", U("Public/index"));
            } else {
                if ($cookie[0] == $_SESSION[$this->loginMarked]) {
                    setcookie("$this->loginMarked", $cookie[0] . "_" . time(), 0, "/");
                    session('elfinder',true);
                } else {
                    setcookie("$this->loginMarked", NULL, -3600, "/");
                    unset($_SESSION[$this->loginMarked], $_COOKIE[$this->loginMarked]);
                    $this->error("帐号异常，请重新登录", U("Public/index"));
                }
            }
        } else {
            $this->redirect("Public/index");
        }
        return TRUE;
    }



}