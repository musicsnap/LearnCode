<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-03-08
 * Time: 11:34
 */

class IndexController extends Controller {
    private $_daytime;
    private $_daydate;
    private $_now_time;

    public function init() {
        parent::init();
        $this->_now_time = $_SERVER['REQUEST_TIME'];
        $this->_daytime = date("Y-m-d H:i:s", $this->_now_time);
        $this->_daydate = date("Y-m-d", $this->_now_time);
        $user_info = $this->_session->offsetGet('loginInfo');
        $this->_view->user_info =$user_info;
    }

    /**
     * 首页展示
     */
    public function indexAction(){

    }

    /**
     *  首页展示内容
     */
    public function mainAction(){

    }


    public function testAction(){
        //发送成功
        $status = Sms::send("18896525561","您好",1);//1是独立通道，系统自动发送。2是营销通道，个人发送（前提是要过滤敏感词）
        die($status);
    }



}