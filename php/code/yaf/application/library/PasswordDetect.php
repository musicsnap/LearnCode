<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2015/10/15
 * Time: 14:19
 */
class PasswordDetect
{

    /**
     * 检测是否是弱密码
     *
     * @param String $passwoed
     * @return Boolean
     */
    public  static  function isWeak($password=''){

        /*
         * 规则  1.小余6位的判断为弱密码
         *       2.全部为数字判定为弱密码
         *       3.XXoo
         * */
        $password = trim($password);

        //小余6位
        if(mb_strlen($password,"utf-8") <6){
            return true;
        }

        //全部为数字
        if(is_numeric($password)){
            return true;
        }
        return false;

    }


}