<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2016/1/28
 * Time: 16:26
 */
class TestController extends Controller {

    public function init() {
        parent::init();
    }

    public function indexAction(){
####################1111111##########################

//        $redis = new Redis_DbZero_Abstract();
//        $arr = array(
//            'code'=>'9',
//            'msg'=>'11'
//        );
//        $redis->set("tutorial11", json_encode($arr));
//        echo "Stored string in redis:: " . $redis->get("tutorial11");
//
//        $redis->lpush("tutorial-list", "Redis");
//        $redis->lpush("tutorial-list", "Mongodb");
//        $redis->lpush("tutorial-list", "Mysql");
//        // 获取存储的数据并输出
//        $arList = $redis->lrange("tutorial-list", 0 ,5);
//        echo "Stored string in redis";
//        print_r($arList);
//        // 获取存储的数据并输出
//        die();

####################22222222##########################
// phpFastCache support "apc", "memcache", "memcached", "wincache" ,"files", "sqlite" and "xcache"
// auto | memcache | files ...etc. Will be default for $cache = __c();
        phpFastCache::$storage = "auto";
        $cache = __c("memcache");
        $server = array(array("127.0.0.1",11211,100));
        $cache->option("server", $server);
        $cache->keyword = array("something here", 60); //600 seconds = 10 minutes
        $data = $cache->keyword;
        var_dump($data);
        die();

####################33333333##########################

//        $excel = new CreateExcel();
//        $excel->setHeader('吴' . date('Y年m月d日 H:i:s', time()));
//        $excel->setTitle(array( '吴'));
//        $excel->setData(array());
//        $excel->echoExcel('show_' . date('Y_m_d_H_i_s', time()));

####################44444444##########################

//        if (!isset($_SESSION['TEST'])) {
//            $_SESSION['TEST'] = time();
//        }
//
//        $_SESSION['TEST3'] = time();
//
//        print $_SESSION['TEST'];
//        print "<br><br>";
//        print $_SESSION['TEST3'];
//        print "<br><br>";
//        print session_id();
//        die();

####################55555555##########################

//        $redis = new Redis();
//        $redis->connect("127.0.0.1","6379");  //php客户端设置的ip及端口
//        //存储一个 值
//        $redis->set("say","Hello World");
//        echo $redis->get("say");     //应输出Hello World
//
//        //存储多个值
//        $array = array('first_key'=>'first_val',
//            'second_key'=>'second_val',
//            'third_key'=>'third_val');
//        $array_get = array('first_key','second_key','third_key');
//        $redis->mset($array);
//        var_dump($redis->mget($array_get));
//        die();

####################66666666##########################

//        $redis = new RedisCluster();
//        $redis->connect(array('host'=>'127.0.0.1','port'=>6379));
//        //*
//        $cron_id = 10001;
//        $CRON_KEY = 'CRON_LIST'; //
//        $PHONE_KEY = 'PHONE_LIST:'.$cron_id;//
//        //cron info
//        $cron = $redis->hget($CRON_KEY,$cron_id);
//        if(empty($cron)){
//            $cron = array('id'=>10,'name'=>'jackluo');//mysql data
//            $redis->hset($CRON_KEY,$cron_id,$cron); // set redis
//        }
//        var_dump($cron);
//
//        //phone list
//        $phone_list = $redis->lrange($PHONE_KEY,0,-1);
//        if(empty($phone_list)){
//            $phone_list =explode(',','13228191831,18608041585');    //mysql data
//            //join  list
//            if($phone_list){
//                $redis->multi();
//                foreach ($phone_list as $phone) {
//                    $redis->lpush($PHONE_KEY,$phone);
//                }
//                $redis->exec();
//            }
//        }
//
//        var_dump($phone_list);
//
//        die();

    }

}