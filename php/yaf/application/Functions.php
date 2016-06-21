<?php
/**
 * Created by PhpStorm.
 * User: Talent Gao
 * Date: 14-8-20
 * Time: 下午2:07
 */

if (!function_exists('linkTo'))
{
    /**
     * 产生一个URL连接
     *
     * @param string $controller
     * @param string $action
     * @param Array $params
     * @return string
     */
    function linkTo($controller, $action = '', $params_string = '')
    {
        if(!empty($params_string)){
            $params_string = explode(";",$params_string);

            foreach($params_string as $row){
                if(empty($row)){
                    continue;
                }
                $row_string = explode(",",$row);
                $params[$row_string[0]] = $row_string[1];
            }

            array_multisort($params,SORT_ASC,SORT_STRING);

        }

        if (empty($params))
        {
            if (empty ($action))
            {
                return "/{$controller}";
            }

            if($controller === 'index')
            {
                return "/index/index/{$action}";
            }

            return "/{$controller}/{$action}";
        }

        if($controller === 'detail')
        {
            if(count($params) === 1)
            {
                return "/{$controller}/{$params['product_id']}";
            }
        }

        if(is_array($params)) ksort ($params);
        $extra  = array();
        foreach ($params as $k => $v)
        {
            if (is_array($v))
            {
                $tmp    = array();
                foreach ($v as $itm)
                {
                    $tmp[]  = "{$k}[]/{$itm}";
                }
                $extra[]    = implode('/', $tmp);
            } else {
                $extra[]    = "{$k}/{$v}";
            }
        }
        $extra  = implode('/', $extra);
        if (empty($action))
            return "/{$controller}/{$extra}";

        return "/{$controller}/{$action}/{$extra}";
    }
}


if (!function_exists('echoJs'))
{
    /**
     * 向客户端发送一段Javascript消息
     *
     * @param string $message
     */
    function echoJs($message)
    {
        echo <<<EOF
    <script type='text/javascript'>
    {$message}
    </script>
EOF;
    }
}

/**
 * 向客户端发送一段Js之后终止
 *
 * @param string $message
 */
function dieJs($message)
{
    echoJs($message);
    die;
}

/**
 * 在客户端alert一条消息之后并且终止
 *
 * @param string $message
 */
function errorAlert($message)
{
    echoJs("alert('{$message}');");
    die;
}

/**
 * 名称：生成随机验证码
 * @param $possibleChars
 * @param int $length
 * @return string
 */
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


/**
 * 名称:  请求接口获取数据
 * 参数:  string $key     接口地址
 * 返回值: array   数据;
 */
function GetData($url)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1) ;
    curl_setopt ( $ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true) ;
    $output = curl_exec($ch);
    curl_close($ch);
    if (empty($output)) { return ;}
    $result = json_decode($output,true);
    return $result;
}
/**
 * 名称:  请求接口提交数据
 * 参数:  string $key     接口地址
 * 参数:  array $data     提交数据
 * 返回值: array   数据;
 */
function PostData($url,$data)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_URL,$url) ;
    curl_setopt($ch, CURLOPT_POST,1) ;
    curl_setopt ( $ch, CURLOPT_HEADER, 0);
    curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
    $output=curl_exec($ch);
    if(curl_errno($ch))print_r(curl_error($ch));
    curl_close($ch) ;
    if (empty($output)) { return ;}
    $result = json_decode($output,true);
    return $result;
}

/**
 * 名称：过滤
 * @param $str
 * @return mixed
 */
function removeXSS($str)
{
    $str = str_replace('<!--  -->', '', $str);
    $str = preg_replace('~/\*[ ]+\*/~i', '', $str);
    $str = preg_replace('/\\\0{0,4}4[0-9a-f]/is', '', $str);
    $str = preg_replace('/\\\0{0,4}5[0-9a]/is', '', $str);
    $str = preg_replace('/\\\0{0,4}6[0-9a-f]/is', '', $str);
    $str = preg_replace('/\\\0{0,4}7[0-9a]/is', '', $str);
    $str = preg_replace('/&#x0{0,8}[0-9a-f]{2};/is', '', $str);
    $str = preg_replace('/&#0{0,8}[0-9]{2,3};/is', '', $str);
    $str = preg_replace('/&#0{0,8}[0-9]{2,3};/is', '', $str);

    $str = htmlspecialchars($str);
    //$str = preg_replace('/&lt;/i', '<', $str);
    //$str = preg_replace('/&gt;/i', '>', $str);


    // 非成对标签
    $lone_tags = array("img", "param","br","hr");
    foreach($lone_tags as $key=>$val)
    {
        $val = preg_quote($val);
        $str = preg_replace('/&lt;'.$val.'(.*)(\/?)&gt;/isU','<'.$val."\\1\\2>", $str);
        $str = transCase($str);
        $str =  preg_replace_callback(
            '/<'.$val.'(.+?)>/i',
            create_function('$temp','return str_replace("&quot;","\"",$temp[0]);'),
            $str
        );
    }
    $str = preg_replace('/&amp;/i', '&', $str);

    // 成对标签
    $double_tags = array("table", "tr", "td", "font", "a", "object", "embed", "p", "strong", "em", "u", "ol", "ul", "li", "div","tbody","span","blockquote","pre","b","font");
    foreach($double_tags as $key=>$val)
    {
        $val = preg_quote($val);
        $str = preg_replace('/&lt;'.$val.'(.*)&gt;/isU','<'.$val."\\1>", $str);
        $str = transCase($str);
        $str =  preg_replace_callback(
            '/<'.$val.'(.+?)>/i',
            create_function('$temp','return str_replace("&quot;","\"",$temp[0]);'),
            $str
        );
        $str = preg_replace('/&lt;\/'.$val.'&gt;/is','</'.$val.">", $str);
    }
    // 清理js
    $tags = Array('javascript', 'vbscript', 'expression', 'applet', 'meta', 'xml', 'behaviour', 'blink', 'link', 'style', 'script', 'embed', 'object', 'iframe', 'frame', 'frameset', 'ilayer', 'layer', 'bgsound', 'title', 'base','font');

    foreach($tags as $tag)
    {
        $tag = preg_quote($tag);
        $str = preg_replace('/'.$tag.'\(.*\)/isU', '\\1', $str);
        $str = preg_replace('/'.$tag.'\s*:/isU', $tag.'\:', $str);
    }

    $str = preg_replace('/[\s]+on[\w]+[\s]*=/is', '', $str);

    Return $str;
}