<?php
return array(
	//'配置项'=>'配置值'
    'DEFAULT_MODULE'     => 'Home', //默认模块
    'URL_MODEL'          => '2', //URL模式
    'SESSION_AUTO_START' => true, //是否开启session
    'LOAD_EXT_CONFIG' => 'db',
    'URL_CASE_INSENSITIVE'  =>  true,//不区分URL地址大小写
    'ACTION_SUFFIX'         =>  'Action', // 操作方法后缀
    'URL_HTML_SUFFIX'=>'html|shtml|xml',// 多个伪静态后缀设置 用|分割
    'URL_DENY_SUFFIX' => 'pdf|ico|png|gif|jpg', // URL禁止访问的后缀设置

    'TMPL_L_DELIM'=>'<{',
    'TMPL_R_DELIM'=>'}>',

//    'SHOW_PAGE_TRACE' =>true,

    'TMPL_PARSE_STRING'     =>array(
        //,自定义路径常量，用于后台样式加载
        '__ADMIN__'             =>  __ROOT__.'/Public/Admin/',
        //,自定义路径常量，用于前台样式加载
        '__HOME__'             =>  __ROOT__.'/Public/Home/',
    ),

);