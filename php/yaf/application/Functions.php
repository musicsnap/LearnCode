<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 14-8-20
 * Time: 下午2:07
 */
//生成随机码
function getRandomString($possibleChars, $length = 4)
{
    $charNum    = strlen($possibleChars) - 1;
    $ret        = '';
    for ($i = 0; $i < $length; ++ $i)
    {
        $ret    .= $possibleChars[mt_rand(0, $charNum)];
    }
    return $ret;
}
