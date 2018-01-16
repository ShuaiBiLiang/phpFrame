<?php
/**
 * Created by PhpStorm.
 * User: liang
 * Date: 2018/1/8
 * Time: 21:42
 */

namespace app\test;


class jsonAndSer
{
    public function __construct()
    {
    }

    function ser($data)
    {
        $i = 0;
        $ret = '';
        while ($i < 10000) {
            $ret = serialize($data);
            $i++;
        }
        return $ret;
    }

    function unser($data)
    {
        $i = 0;
        $ret = '';
        while ($i < 10000) {
            $ret = unserialize($data);
            $i++;
        }
        return $ret;
    }

    function json($data)
    {
        $i = 0;
        $ret = '';
        while ($i < 10000) {
            $ret = json_encode($data);
            $i++;
        }
        return $ret;
    }

    function unjson($data)
    {
        $i = 0;
        $ret = '';
        while ($i < 10000) {
            $ret = json_decode($data, true);
            $i++;
        }
        return $ret;
    }

    public function go(){
        $short = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
        set_time_limit(0);
        $i = 0;
        while ($i<10)
        {
            $start = microtime(true);
            $ret = self::ser($short);
            $end = microtime(true);
            dump( $end - $start);
            echo '测试序列化</br>';
            $i++;
        }
    }

}