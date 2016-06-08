<?php
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);

class WebSocketServer
{
    public static $instance;
    private $realname;
    private $logininfo;
    public function __construct()
    {
        define("APPLICATION_PATH", realpath(dirname(__FILE__) . '/../'));
        $this->application = new Yaf_Application(APPLICATION_PATH."/conf/application.ini");
        $this->application->bootstrap();
        //所以这边先去获取session信息，然后可以显示当前的用户
        $session=Yaf_Session::getInstance();
        $this->logininfo = $session->offsetGet('loginInfos');
        $db = new BaseModel();
        //是否要把聊天信息存数据库，并通过显示当天的聊天信息到面板中
        $this->realname = $db->getDB()->fetchOne("select realname from users where id='9'");
        $serv = new swoole_websocket_server("0.0.0.0", 9502);
        $serv->set(
            array(
                'daemonize' => true,//开启守护进程
                'log_file' => './swoole.log'
            )
        );
        $serv->on('Open', function ($server, $request) {
            file_put_contents(__DIR__ . '/log.txt', $request->fd);
        });
        $serv->on('Message', function ($server, $frame) {
            $data = $frame->data;
            $m = file_get_contents(__DIR__ . '/log.txt');
            if ('smes_closed' == $frame->data) {
                $server->Close($frame->fd);
            } else {
                for ($i = 1; $i <= $m; $i++) {
                    $server->push($i,$this->realname . '说：' . $data);
                }
            }
        });
        $serv->on('Close', function ($server, $fd) {
            echo "connection close: " . $fd;
        });
        $serv->start();
    }
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new WebSocketServer;
        }
        return self::$instance;
    }
}

WebSocketServer::getInstance();