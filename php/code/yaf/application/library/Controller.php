<?php

class Controller extends Yaf_Controller_Abstract{

    //配置文件
    protected $_config;

    //Session
    protected $_session;
    /**
     * @var $_menu_list
     */
    protected $_menu_list;
    /**
     * @var $_cache
     */
    protected $_cache;



    public function init(){
        $this->_config = Yaf_Registry::get("config");
        $this->_session = Yaf_Session::getInstance();
        $this->_session->start();
        //系统功能初始化
        $this->_cache = Yaf_Registry::get("cache");//
        $user_info = $this->_session->offsetGet('loginInfo');
        $this->_view->user_info =$user_info;
        if(empty($user_info)){
            $this->redirect("/login");
        }
        /**
         *这边的去判断是不是开发模式
         */
        if(!YAF_DEBUG){

        }

    }

}
