<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2015/9/23
 * Time: 15:53
 */
class Sms
{
    const POSTURL = 'http://www.jianzhou.sh.cn/JianzhouSMSWSServer/http/sendBatchMessage?';
    //发送配置
    private static $config =array(
        'account'=>array(
            1 => array(
                'username'    =>'sdk_shsumi',  //独立通道,用作系统自动发送
                'password'   => '897799',
            ),
            2 => array(
                'username'    =>'sdk_shumiyx',  //营销通道，用作人为发送
                'password'   => '749943',
            )
        ),
        'suffix'      =>'[退订回复T]【塑米城】'
    );
    public static  function  send($mobile,$content,$channel){
        $data = array(
            "account" => self::$config['account'][$channel]['username'],
            "password" => self::$config['account'][$channel]['password'],
            "destmobile" => $mobile,
            "msgText" => $content.self::$config['suffix'],
            "sendDateTime" => "",
        );
        //开始发送
        return self::https_request(self::POSTURL,$data);
    }
    private static function https_request($url,$data =NULL){
        $curl = curl_init();
        curl_setopt($curl,CURLOPT_HEADER, false);
        curl_setopt($curl,CURLOPT_POST, true);
        curl_setopt($curl,CURLOPT_BINARYTRANSFER,false);
        $post_data = http_build_query($data);
        curl_setopt($curl, CURLOPT_POSTFIELDS,$post_data);
        curl_setopt($curl, CURLOPT_URL,$url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($curl);
        curl_close($curl);
        return $output;
    }

}