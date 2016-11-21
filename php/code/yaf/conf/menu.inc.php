<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-3-18
 * Time: 上午11:56
 */
//这边添加修改菜单，然后再/library/Controller 里面开启菜单初始化信息，前提是要清空原来的菜单数据
$__menuCfg  = array(
    0 => array(
        'module_name' => '控制台',
        'module_link' => '',
        'module_icon' => 'fa fa-home',
        'auth_key' => array(),
        'module_menu' => array(
            0 => array(
                'name'     => '首页',
                'sub_link'     => '/',
                'auth_key' => array(''),
                'sub_icon' => "fa fa-home",
                'sub_menu' =>array(),
            ),
        )
    ),
    1 => array(
        'module_name' => '产品',
        'module_link' => '',
        'module_icon' => 'fa fa-cubes',
        'auth_key' => array('product'),
        'module_menu' => array(
            0 => array(
                'name'  => '产品管理',
                'sub_icon' => 'fa fa-cubes',
                'sub_link'     => '',
                'sub_menu' => array(
                    array(
                        'name'     => '产品列表',
                        'link'     => '/product/product',
                        'auth_key' => array('product-list'),
                        'icons' => "fa fa-cubes"
                    ),
                    array(
                        'name'      => '产品添加',
                        'link'      => '/product/addproduct',
                        'auth_key'  => array('product-add'),
                        'icons' => "fa fa-cubes"
                    ),
                )
            ),
            1 => array(
                'name'  => '品种管理',
                'sub_icon' => 'fa fa-cubes',
                'sub_link'     => '',
                'sub_menu' => array(
                    array(
                        'name'     => '品种列表',
                        'link'     => '/product/productcate',
                        'auth_key' => array('product-cate-list'),
                        'icons' => "fa fa-cubes"
                    ),
                    array(
                        'name'      => '品种添加',
                        'link'      => '/product/addproductcate',
                        'auth_key'  => array('product-cate-add'),
                        'icons' => "fa fa-cubes"
                    ),
                )
            ),
            2 => array(
                'name'  => '厂商管理',
                'sub_icon' => 'fa fa-cubes',
                'sub_link'     => '',
                'sub_menu' => array(
                    array(
                        'name'     => '厂商列表',
                        'link'     => '/product/productbrand',
                        'auth_key' => array('product-brand-list'),
                        'icons' => "fa fa-cubes"
                    ),
                    array(
                        'name'      => '厂商添加',
                        'link'      => '/product/addproductbrand',
                        'auth_key'  => array('product-brand-add'),
                        'icons' => "fa fa-cubes"
                    ),
                )
            ),
        )
    ),
    2 => array(
        'module_name' => '供求',
        'module_link' => '',
        'module_icon' => 'fa fa-reorder',
        'auth_key' => array('order'),
        'module_menu' => array(
            0 => array(
                'name'  => '订单管理',
                'sub_icon' => 'fa fa-reorder ',
                'sub_link'     => '',
                'sub_menu' => array(
                    array(
                        'name'     => '订单列表',
                        'link'     => '/order/orderlist',
                        'auth_key' => array('order-sale-list'),
                        'icons' => "fa fa-reorder"
                    ),
//                    array(
//                        'name'     => '采购订单',
//                        'link'     => '/order/buyorder',
//                        'auth_key' => array('order-buy-list'),
//                        'icons' => "fa fa-reorder"
//                    ),
                )
            ),
            1 => array(
                'name'  => '报价管理',
                'sub_icon' => 'fa fa-reorder',
                'sub_link' => '',
                'sub_menu' => array(
                    array(
                        'name'     => '报价列表',
                        'link'     => '/quote/quotelist',
                        'auth_key' => array('quote-list'),
                        'icons' => "fa fa-reorder"
                    ),
                    array(
                        'name'     => '发布报价',
                        'link'     => '/quote/addquote',
                        'auth_key' => array('quote-add'),
                        'icons' => "fa fa-plus"
                    ),
//                    array(
//                        'name'     => '求购报价单',
//                        'link'     => '/quote/inquirequote',
//                        'auth_key' => array('inquiry-quote'),
//                        'icons' => "fa fa-reorder"
//                    ),
                    array(
                        'name'     => '委托寄售',
                        'link'     => '/quote/sale',
                        'auth_key' => array('quote-sale'),
                        'icons' => "fa fa-reorder"
                    ),
                )
            ),
            2 => array(
                'name'  => '求购管理',
                'sub_icon' => 'fa fa-building-o',
                'sub_link' => '',
                'sub_menu' => array(
                    array(
                        'name'     => '求购列表',
                        'link'     => '/inquiry/inquirylist',
                        'auth_key' => array('inquiry-list'),
                        'icons' => "fa fa-building-o"
                    ),
                    array(
                        'name'     => '发布求购',
                        'link'     => '/inquiry/addinquiry',
                        'auth_key' => array('inquiry-add'),
                        'icons' => "fa fa-plus"
                    ),
                    array(
                        'name'     => '快速求购',
                        'link'     => '/inquiry/inquiryfast',
                        'auth_key' => array('inquiry-fast'),
                        'icons' => "fa fa-building-o"
                    ),
                )
            ),
        )
    ),
    3 => array(
        'module_name' => '会员',
        'module_link' => '',
        'module_icon' => 'fa fa-users',
        'auth_key' => array('user'),
        'module_menu' => array(
            0 => array(
                'name'  => '会员管理',
                'sub_icon' => 'fa fa-users',
                'sub_link' => '',
                'sub_menu' => array(
                    array(
                        'name'     => '会员列表',
                        'link'     => '/user/userlist',
                        'auth_key' => array('user-list'),
                        'icons' => "fa  fa-user"
                    ),
                    array(
                        'name'     => '添加会员',
                        'link'     => '/user/adduser',
                        'auth_key' => array('user-add'),
                        'icons' => "fa  fa-user-plus"
                    ),
                )
            ),
            1 => array(
                'name'  => '公司管理',
                'sub_icon' => 'fa fa-users',
                'sub_link' => '',
                'sub_menu' => array(
                    array(
                        'name'     => '公司列表',
                        'link'     => '/business/businesslist',
                        'auth_key' => array('business-list'),
                        'icons' => "fa fa-users"
                    ),
                    array(
                        'name'     => '添加公司',
                        'link'     => '/business/addbusiness',
                        'auth_key' => array('business-add'),
                        'icons' => "fa fa-users"
                    ),
                )
            ),
//            2 => array(
//                'name'  => '货车管理',
//                'sub_icon' => 'fa fa-users',
//                'sub_link' => '',
//                'sub_menu' => array(
//                    array(
//                        'name'     => '货车列表',
//                        'link'     => '/truck/trucklist',
//                        'auth_key' => array('truck-list'),
//                        'icons' => "fa fa-users"
//                    ),
//                )
//            ),
        )
    ),
//    4 => array(
//        'module_name' => '金融',
//        'module_link' => '',
//        'module_icon' => 'fa  fa-money',
//        'auth_key' => array('finance'),
//        'module_menu' => array(
//            0 => array(
//                'name'  => '开户管理',
//                'sub_icon' => 'fa  fa-money',
//                'sub_link' => '',
//                'sub_menu' => array(
//                    array(
//                        'name'     => '开户信息',
//                        'link'     => '/bank/open',
//                        'auth_key' => array('finance-open'),
//                        'icons' => "fa  fa-money"
//                    ),
//                    array(
//                        'name'     => '买入信息',
//                        'link'     => '/bank/buy',
//                        'auth_key' => array('finance-buy'),
//                        'icons' => "fa  fa-money"
//                    ),
//                    array(
//                        'name'     => '卖出信息',
//                        'link'     => '/bank/sale',
//                        'auth_key' => array('finance-sale'),
//                        'icons' => "fa  fa-money"
//                    ),
//                )
//            ),
//            1 => array(
//                'name'  => '融资申请',
//                'sub_icon' => 'fa  fa-money',
//                'sub_link' => '',
//                'sub_menu' => array(
//                    array(
//                        'name'     => '申请列表',
//                        'link'     => '/bank/application',
//                        'auth_key' => array('finance-application'),
//                        'icons' => "fa  fa-money"
//                    ),
//                )
//            ),
//            2 => array(
//                'name'  => '贷款管理',
//                'sub_icon' => 'fa  fa-money',
//                'sub_link' => '',
//                'sub_menu' => array(
//                    array(
//                        'name'     => '贷款列表',
//                        'link'     => '/bank/loan',
//                        'auth_key' => array('finance-loan'),
//                        'icons' => "fa  fa-money"
//                    ),
//                )
//            ),
//        )
//    ),
    5 => array(
        'module_name' => '物流',
        'module_link' => '',
        'module_icon' => 'fa   fa-truck',
        'auth_key' => array('vehicle'),
        'module_menu' => array(
            0 => array(
                'name'  => '车辆管理',
                'sub_icon' => 'fa   fa-truck',
                'sub_link' => '',
                'sub_menu' => array(
                    array(
                        'name'     => '车辆列表',
                        'link'     => '/vehicle/list',
                        'auth_key' => array('vehicle-list'),
                        'icons' => "fa   fa-truck"
                    ),
//                    array(
//                        'name'     => '添加车辆',
//                        'link'     => '/vehicle/addvehicle',
//                        'auth_key' => array('vehicle-add'),
//                        'icons' => "fa   fa-truck"
//                    ),
                )
            ),
            1 => array(
                'name'  => '线路管理',
                'sub_icon' => 'fa   fa-truck',
                'sub_link' => '',
                'sub_menu' => array(
                    array(
                        'name'     => '线路列表',
                        'link'     => '/route/list',
                        'auth_key' => array('route-list'),
                        'icons' => "fa   fa-truck"
                    ),
                )
            ),
            2 => array(
                'name'  => '货物管理',
                'sub_icon' => 'fa   fa-truck',
                'sub_link' => '',
                'sub_menu' => array(
                    array(
                        'name'     => '货物列表',
                        'link'     => '/huoyuan/list',
                        'auth_key' => array('huoyuan-list'),
                        'icons' => "fa   fa-truck"
                    ),
                )
            ),
        )
    ),
    6 => array(
        'module_name' => '营销',
        'module_link' => '',
        'module_icon' => 'fa  fa-ticket',
        'auth_key' => array('market'),
        'module_menu' => array(
            0 => array(
                'name'  => '资讯管理',
                'sub_icon' => 'fa  fa-ticket',
                'sub_link' => '',
                'sub_menu' => array(
                    array(
                        'name'     => '资讯列表',
                        'link'     => '/inform/informlist',
                        'auth_key' => array('inform-news-list'),
                        'icons' => "fa  fa-ticket"
                    ),
                    array(
                        'name'     => '资讯添加',
                        'link'     => '/inform/addinform',
                        'auth_key' => array('inform-news-add'),
                        'icons' => "fa  fa-ticket"
                    ),
                    array(
                        'name'     => '资讯分类',
                        'link'     => '/inform/informcate',
                        'auth_key' => array('inform-cate-list'),
                        'icons' => "fa  fa-ticket"
                    ),
                    array(
                        'name'     => '分类添加',
                        'link'     => '/inform/addinformcate',
                        'auth_key' => array('inform-cate-add'),
                        'icons' => "fa  fa-ticket"
                    ),
                )
            ),
            1 => array(
                'name'  => '标签链接',
                'sub_icon' => 'fa  fa-ticket',
                'sub_link' => '',
                'sub_menu' => array(
                    array(
                        'name'     => '链接列表',
                        'link'     => '/market/flink',
                        'auth_key' => array('market-flink-list'),
                        'icons' => "fa  fa-ticket"
                    ),
                    array(
                        'name'     => '链接添加',
                        'link'     => '/market/addflink',
                        'auth_key' => array('market-flink-add'),
                        'icons' => "fa  fa-ticket"
                    ),
                )
            ),
//            2 => array(
//                'name'  => '标签管理',
//                'sub_icon' => 'fa  fa-ticket',
//                'sub_link' => '',
//                'sub_menu' => array(
//                    array(
//                        'name'     => '标签列表',
//                        'link'     => '/market/lable',
//                        'auth_key' => array('market-lable-list'),
//                        'icons' => "fa  fa-ticket"
//                    ),
//                    array(
//                        'name'     => '标签添加',
//                        'link'     => '/market/lable',
//                        'auth_key' => array('market-lable-add'),
//                        'icons' => "fa  fa-ticket"
//                    ),
//                )
//            ),
//            3 => array(
//                'name'  => '微信管理',
//                'sub_icon' => 'fa  fa-ticket',
//                'sub_link' => '',
//                'sub_menu' => array(
//                    array(
//                        'name'     => '微信导航',
//                        'link'     => '/market/wechatnav',
//                        'auth_key' => array('market-wechatnav'),
//                        'icons' => "fa  fa-ticket"
//                    ),
//                    array(
//                        'name'     => '标签添加',
//                        'link'     => '/market/addwechatnav',
//                        'auth_key' => array('market-wechat-add'),
//                        'icons' => "fa  fa-ticket"
//                    ),
//                )
//            ),
            //这先暂时不去处理
            2 => array(
                'name'  => '短信管理',
                'sub_icon' => 'fa  fa-ticket',
                'sub_link' => '',
                'sub_menu' => array(
                    array(
                        'name'     => '短信模板',
                        'link'     => '/message/template',
                        'auth_key' => array('message-template'),
                        'icons' => "fa  fa-ticket"
                    ),
                    array(
                        'name'     => '添加短信',
                        'link'     => '/message/addmessage',
                        'auth_key' => array('message-add'),
                        'icons' => "fa  fa-ticket"
                    ),
                )
            ),
        )
    ),
    7 => array(
        'module_name' => '系统',
        'module_link' => '',
        'module_icon' => 'fa  fa-cog',
        'auth_key' => array('system'),
        'module_menu' => array(
            0 => array(
                'name'  => '权限管理',
                'sub_icon' => 'fa fa-key',
                'sub_link' => '',
                'sub_menu' => array(
                    array(
                        'name'     => '权限列表',
                        'link'     => '/privilege/privilege',
                        'auth_key' => array('system-privilege-list'),
                        'icons' => "fa fa-bars"
                    ),
                    array(
                        'name'     => '添加权限',
                        'link'     => '/privilege/addprivilege',
                        'auth_key' => array('system-privilege-add'),
                        'icons' => "fa fa-plus"
                    ),
                    array(
                        'name'     => '权限组列表',
                        'link'     => '/privilege/privilegegroup',
                        'auth_key' => array('system-privilegegroup-list'),
                        'icons' => "fa fa-bars"
                    ),
                    array(
                        'name'     => '添加权限组',
                        'link'     => '/privilege/addprivilegegroup',
                        'auth_key' => array('system-privilegegroup-add'),
                        'icons' => "fa fa-plus"
                    ),
                )
            ),
            1 => array(
                'name'  => '角色管理',
                'sub_icon' => 'fa  fa-user',
                'sub_link' => '',
                'sub_menu' => array(
                    array(
                        'name'     => '角色列表',
                        'link'     => '/worker/role',
                        'auth_key' => array('system-role-list'),
                        'icons' => "fa  fa-user-secret"
                    ),
                    array(
                        'name'     => '角色添加',
                        'link'     => '/worker/addrole',
                        'auth_key' => array('system-role-add'),
                        'icons' => "fa  fa-user-plus"
                    ),
                    array(
                        'name'     => '管理员列表',
                        'link'     => '/worker/worker',
                        'auth_key' => array('system-worker-list'),
                        'icons' => "fa  fa-user"
                    ),
                    array(
                        'name'     => '添加管理员',
                        'link'     => '/worker/addworker',
                        'auth_key' => array('system-worker-add'),
                        'icons' => "fa  fa-user-plus"
                    ),
                )
            ),
            2 => array(
                'name'  => '系统日志',
                'sub_icon' => 'fa  fa-cog',
                'sub_link' => '',
                'sub_menu' => array(
                    array(
                        'name'     => '访问日志',
                        'link'     => '/system/alog',
                        'auth_key' => array('system-alog-list'),
                        'icons' => "fa  fa-cog"
                    ),
                    array(
                        'name'     => '流量日志',
                        'link'     => '/system/wlog',
                        'auth_key' => array('system-wlog-list'),
                        'icons' => "fa  fa-cog"
                    ),
                    array(
                        'name'     => '系统日志',
                        'link'     => '/system/slog',
                        'auth_key' => array('system-slog-list'),
                        'icons' => "fa  fa-cog"
                    ),
                )
            ),
            3 => array(
                'name'  => '修改密码',
                'sub_icon' => 'fa  fa-cog',
                'sub_link' => '/system/password',
                'sub_menu' => array()
            ),
            4 => array(
                'name'  => '菜单管理',
                'sub_icon' => 'fa  fa-file',
                'sub_link' => '',
                'sub_menu' => array(
                    array(
                        'name'     => '模块菜单',
                        'link'     => '/menu/modulemenu',
                        'auth_key' => array('system-modulemenu-list'),
                        'icons' => "fa  fa-file"
                    ),
                    array(
                        'name'     => '用户菜单',
                        'link'     => '/menu/workermenu',
                        'auth_key' => array('system-workermenu-list'),
                        'icons' => "fa  fa-file"
                    ),
                )
            ),
        )
    ),
);

