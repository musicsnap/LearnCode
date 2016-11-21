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
//注册配置对象到config，可以全局使用
    public function _initConfig() {
		//把配置保存起来
        $this->_config = Yaf_Application::app()->getConfig();
		Yaf_Registry::set('config', $this->_config);
	}

    public function _initDebug(){
        if($this->_config->application->debug){
            defined('YAF_DEBUG') or define('YAF_DEBUG', true);
        }else{
            defined('YAF_DEBUG') or define('YAF_DEBUG', false);
        }
    }
//注册自定义类库的命名空间
    public function _initLocalName() {
        Yaf_Loader::getInstance()->registerLocalNamespace(array(
            'Smarty','Swift','Munee'
        ));
    }

    public function _initPlugin(Yaf_Dispatcher $dispatcher) {

        /**
         * register Routes plugin
         */
        $routes = new RoutesPlugin();
        $dispatcher->registerPlugin($routes);

        /**
         * register Smarty plugin
         */
        $smarty = new SmartyPlugin();
        $dispatcher->registerPlugin($smarty);

    }

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

    //初始化zend_db
    public function _initZendDbAdapter(){
        $dbAdapter = new Zend_Db_Adapter_Mysqli(
            $this->_config->database->zend->toArray()
        );

        $dbAdapter->query("SET NAMES {$this->_config->database->zend->charset}");

        Zend_Db_Table::setDefaultAdapter($dbAdapter);
    }

    //这个是初始化Redis类、这个直接可使用
    public function _initRedis(){
        if(extension_loaded('Redis')){
            $host  = $this->_config->redis->config->host;
            $port  = $this->_config->redis->config->port;
            $redis = new phpredis();
            Yaf_Registry::set('redis', $redis);
        }
    }

    /**
     * 这是初始化memcache
     */
    public function _initMemcache(Yaf_Dispatcher $dispatcher) {
        $cacheCfg = $this->_config->memcached->config;
        $servers = $cacheCfg->toArray();
        if(!empty($servers)){
            phpFastCache::$storage = "auto";
            $cache = __c($cacheCfg->type);
            $server = array(array($cacheCfg->host,$cacheCfg->port,$cacheCfg->timeout));
            $cache->option("server", $server);
            Yaf_Registry::set("cache", $cache);
        }
    }

    public function _initRoute(Yaf_Dispatcher $dispatcher) {
		//在这里注册自己的路由协议,默认使用简单路由
        $router = Yaf_Dispatcher::getInstance()->getRouter();  //通过派遣器得到默认的路由器
        /**
         * add the routes defined in ini config file 添加配置中的路由
         */
        $router->addConfig(Yaf_Registry::get("config")->routes);
	}

    public function _initSmarty(Yaf_Dispatcher $dispatcher) {
        Yaf_Loader::import("smarty/Adapter.php");
        $smarty = new Smarty_Adapter(null, Yaf_Registry::get("config")->get("smarty")->get("index"));
        Yaf_Registry::set("smarty", $smarty);
        $dispatcher->setView($smarty);
    }

}
