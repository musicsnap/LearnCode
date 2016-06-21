/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 16-6-21
 * Time: 下午1:56
 */

ps -xal 找出defunct的父进程ID，然后kill   父进程ID
0     0 28737 13174  20   0      0     0 exit   Z    ?          0:00 [sh] <defunct>
kill 13174;
