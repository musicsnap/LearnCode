<?php

class Apicontroller extends Yaf_Controller_Abstract{

    //配置文件
    protected $_config;

    //Session
    protected $_session;

    /**
     * @var $_cache缓存
     */
    protected $_cache;
    /**
     * @var $_authManager权限
     */
    protected $_authManager;

    public function init(){
        $this->_config = Yaf_Registry::get("config");

        $this->_session = Yaf_Session::getInstance();
        $this->_session->start();


        //系统功能初始化
        $this->_cache = Yaf_Registry::get("cache");//
        $user_info = $this->_session->offsetGet('loginInfo');



    }

}
