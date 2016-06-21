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
        if(empty($user_info)){
            $this->redirect("/login");
        }
    }

    /**
     * 首页展示
     */
    public function indexAction(){
        $seocfg = array(
            'title'=> '塑米城-后台管理系统',
            'keywords'=> '塑米城，塑料米，塑料行业，塑料报价，塑料行情，塑料原料价格',
            'description'=> '塑米城-塑料原料交易平台',
        );
        $this->_view->seocfg = $seocfg;
        $this->_view->MenuList = $this->getMenuList();
        //这边的对于notifications的处理
    }

    /**
     *  首页展示内容
     */
    public function mainAction(){
        //计算当月的信息
        $start = date("Y-m",$this->_now_time)."-01 00:00:00";
        $startdate = date("Y-m-01",$this->_now_time);
        $titlecfg = array(
            'menu'=>'首页',
            'sub_menu'=>'首页',
            'site_menu'=>'首页-塑米城管理后台',
        );
        $this->_view->titlecfg = $titlecfg;
        $usersmodel = new UserModel();
        $usercount = $usersmodel->getUserCount("reg_date>'{$start}' and reg_date<='{$this->_daytime}'");
        $this->_view->usercount = $usercount;

        $order_start = date("Y-m",$this->_now_time)."-01";
        $ordermodel = new OrderModel();
        $ordercount = $ordermodel->getOrderCount("order.order_date>'{$order_start}' and order.order_date<='{$this->_daydate}'");
        $this->_view->ordercount = $ordercount;

        $quotemodel = new QuoteModel();
        $quotecount = $quotemodel->getQuoteCount("iq_quotation.update_time>'{$start}' and iq_quotation.update_time<='{$this->_daytime}'");
        $this->_view->quotecount = $quotecount;

        $inquirymodel = new InquiryModel();
        $inquirycount = $inquirymodel->getInquiryCount("iq_inquiry.update_time>'{$start}' and iq_inquiry.update_time<='{$this->_daytime}'");
        $this->_view->inquirycount = $inquirycount;
        //这边设置时间
        $result = strtotime($this->_daytime)-strtotime($start);
        $days = ceil($result/(1*24*60*60));
        $this->_view->days = $days;
        //设置首页的图表
        //这边的当月的每天如何去设置？
        $days = date("d",$this->_now_time);
        if($days<10){
            $days=substr($days,-1,1);
        }
        $currencts = array();
        for ($i=1;$i<=$days;$i++){
            if($i>=10){
                $currenct = date('Y-m',$this->_now_time)."-{$i}";
            }else{
                $currenct = date('Y-m',$this->_now_time)."-0{$i}";
            }
            $currencts[] = $currenct;
            $DayCount[] =  $usersmodel->getDayCountByWhere("DATE_FORMAT(reg_date,'%Y-%m-%d')='{$currenct}'");
        }
        $currenct_day = json_encode($currencts,true);
        $currenct_daycount = json_encode($DayCount,true);
        $this->_view->currenct_day = $currenct_day;
        $this->_view->currenct_daycount = $currenct_daycount;

        for ($k=1;$k<=$days;$k++){
            if($k>=10){
                $currenct = date('Y-m',$this->_now_time)."-{$k}";
            }else{
                $currenct = date('Y-m',$this->_now_time)."-0{$k}";
            }

            $DaysCount[] =  count($quotemodel->getDayQuoteCount("DATE_FORMAT(update_time,'%Y-%m-%d')='{$currenct}'"));
        }
        $quote_daycount = json_encode($DaysCount,true);
        $this->_view->quote_daycount = $quote_daycount;
    }


    public function testAction(){
        //发送成功
        $status = Sms::send("18896525561","您好",1);//1是独立通道，系统自动发送。2是营销通道，个人发送（前提是要过滤敏感词）
        die($status);
    }



}