<?php
/**
 * @name Bootstrap
 * @author {&$AUTHOR&}
 * @desc 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * @see http://www.php.net/manual/en/class.yaf-bootstrap-Abstract.php
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */

class Bootstrap extends Yaf_Bootstrap_Abstract{

    private $_config;

    /**
     *获取全局配置
     */
    public function _initConfig() {
		//把配置保存起来
        $this->_config = Yaf_Application::app()->getConfig();
		Yaf_Registry::set('config', $this->_config);
	}

    /**
     *错误设置
     */
    public function _initErrors(){
        if($this->_config->application->showErrors){
            error_reporting (-1);
            define('DEBUG_MODE', false);
            //报错是否开启
            ini_set('display_errors','On');
        }else{
            error_reporting (-1);
            define('DEBUG_MODE', false);
            ini_set('display_errors', 'Off');
        }
    }

}
