<?php
/**
 * Created by PhpStorm.
 * User: liang
 * Date: 2018/1/7
 * Time: 17:09
 */
namespace core\logg;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;


class filelog extends loger{

    public function __construct()
    {
    }

    public function log($name,$params=array())
    {

//      file_put_contents(IMOOC.'/log/log.php',$name); //add content to file.
        $today = date('Y-m-d');
        $time = date("H:i:s");
        // create a log channel
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler(IMOOC.'/log/'.$today.'.php', Logger::WARNING));
        // add log content
        $log->addWarning($time.':'.$name,$params);
    }
}