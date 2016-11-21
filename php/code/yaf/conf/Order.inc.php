<?php
//报价配置信息
$ReleasekeyCfg = array(
    'erp'=>'erp报价',
    'pc'=>'平台报价',
    'in'=>'求购报价',
);

$QuoteTypeCfg = array(
    'stock' => '集采',
    'outer' => '寄售',
    'presale' => '预售',
    'inner'  =>'内部',
    'require'  =>'求购',
    'foreign'=>'跨境'
);

$QuoteTypeMean = array(
    '集采' => 'stock',
    '寄售' => 'outer',
    '预售' => 'presale',
    '内部'  =>'inner',
    '求购'  =>'require',
    '跨境'=>'foreign'
);

$QuoteStatusMean = array(
    1=>'待审核',//这里待管理员审核信息是否完善
    2=>'已上架',
    3=>'已下架',
    4=>'审核不通过', //这里待管理员审核信息是否完善
    5=>'已过期',
    6=>'已闭市',
);
$QuoteStatusMeancfg = array(
    '待审核'=>1,
    '已上架'=>2,
    '已下架'=>3,
    '审核不通过'=>4,
    '已过期' =>5,
    '已闭市' =>6,
);
$QuoteStatusCfg = array(
    'audit'=>1,
    'up'=>2,
    'down'=>3,
    'cancel'=>4,
    'expire' =>5,
    'closed' =>6,
);

$_DeliveryMethodMean = array(
    1=>'自提',
    2=>'配送'
);
$_DeliveryMethodCfg = array(
    'T'=>1,
    'S'=>2
);

$_ServiceMean = array(
    1=>'现货',
    2=>'期货'
);

$_CurrencyMean = array(
    1=>'人民币',
    2=>'美金'
);

$_settlement = array('L/C A/S', 'L/C 60天', 'L/C 90天', 'L/C 120天', 'T/T');

//求购配置
$_BuyStateCfg = array(
    'wait_audit'=>1,
    'audit'=>2,
    'Negotiate'=>3,
    'Trading'=>4,
    'done'=>5,
    'cancel' =>6,
    'expire' =>7,
);

$_BuyStartMean = array(
    1 => '等待审核',
    2 => '等待报价',
    3 => '正在洽谈',
    4 =>'正在交易',
    5 =>'交易完成',
    6 => '已取消',
    7 => '已过期',
);
$_BuyStartMeanCfg = array(
    '等待审核'=>1,
    '等待报价'=>2,
    '正在洽谈'=>3,
    '正在交易'=>4,
    '交易完成'=>5,
    '已取消'=>6,
    '已过期'=>7,
);

//订单
$_PurchaseOrderStatusMean = array(
    1 => "待确认",
    2 => "待付款",
    3 => "已付订金",
    4 => "待发货",
    5 => "待收货",
    6 => "待开票",
    7 => "交易完成",
    8 => "已全部退货",
    9 => "已取消",
    10 =>"未生效",
);

$_PurchaseOrderStatusCfg = array(
    "待确认",
    "待付款",
    "已付订金",
    "待发货",
    "待收货",
    "待开票",
    "交易完成",
    "已全部退货",
    "已取消",
    "未生效",
);

$_PurchaseOrderStatus   = array(
    '待确认'       =>1,
    '待付款'      =>2,
    '已付订金'    =>3,
    '待发货'  =>4,
    '待收货'  =>5,
    '待开票'  =>6,
    '交易完成'  =>7,
    '已全部退货'    =>8,
    '已取消'      =>9,
    '未生效'     =>10,
);
$_PurchaseOrderCfgStatus   = array(
    'draft'       =>1,
    'un_pay'      =>2,
    'part_pay'    =>3,
    'un_deliver'  =>4,
    'un_receive'  =>5,
    'un_invoice'  =>6,
    'done'        =>7,
    'returned'    =>8,
    'cancel'      =>9,
    'invalid'     =>10,
);

$_saleOrderSource    = array(
    'stock'    => '自有库存',
    'outer'  => '外库',
    'presale'=>'预售',
    'require'  => '求购',
    'app'      => 'APP下单',
    'sumibuy'  => '塑米城下单',
    'mobile'   => '手机端',
    'manual'   => '代客下单',
    'erp'   => 'erp对接',
);
$_saleOrderSourcecfg   = array(
    '自有库存'    => 'stock',
    '外库'    => 'outer',
    '预售'    =>'presale',
    '求购'    => 'require',
    'APP下单'    => 'app',
    '塑米城下单'    => 'sumibuy',
    '手机端'    => 'mobile',
    '代客下单'   => 'manual',
    'erp对接'   => 'erp'
);
$_saleOrderSourceMean   = array(
    '自有库存',
    '外库',
    '预售',
    '求购',
    'APP下单',
    '塑米城下单',
    '手机端',
    '代客下单',
    'erp对接'
);
//订单类型
$_saleOrderType = array(
    '自营订单'=>1,//自有
    '第三方订单'=>2 //第三方
);
$_saleOrderTypeMean = array(
    1 => '自营订单',
    2 => '第三方订单',
);
$_saleOrderTypeCfgMean = array(
    '自营订单',
    '第三方订单',
);

//产品配置
$_ProductStatus = array(
    '启用'=>'1',
    '禁用'=>'-1'
);
$_ProductStatusMean = array(
    '1'=>'启用',
    '-1'=>'禁用'
);

$_ProductStatusCfg = array(
    'start'=>'1',
    'close'=>'-1'
);

//委托寄售
$_DemandStatusMean = array(
    1=>'待审核',
    2=>'已处理',
    3=>'审核取消'
);
$_DemandStatusCfg = array(
    'draft'=>1,
    'done'=>2,
    'cancel'=>3,
);

$_DemandStatusCfgMean = array(
    '待审核'=>1,
    '已处理'=>2,
    '审核取消'=>3,
);

$_DemandTypeMean = array(
    1=>'免费找货',
    2=>'集中采购',
    3=>'委托寄售'
);
$_DemandTypeCfg = array(
    'findgoods'=>1,
    'purchase'=>2,
    'entrust'=>3,
);
$_DemandTypeMeanCfg = array(
    '免费找货'=>1,
    '集中采购'=>2,
    '委托寄售'=>3
);





?>
