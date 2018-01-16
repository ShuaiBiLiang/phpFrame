<?php
/**
 * Created by PhpStorm.
 * User: liang
 * Date: 2018/1/7
 * Time: 17:04
 */
namespace \core;
use \core\imooc;

abstract class logger{

     public function __construct()
     {
     }

     public static $logInstance;

    public  static  function getInstance(){
        $driveType = imooc::getConf('drive',log);
        if($driveType == 'file'){
            $targetPath = IMOOC.'\\core\\logg\\filelog.php';
            if(is_file($targetPath)){
                $ctrlPath = '\\core\\logg\\filelog';
                $ctrInstance = new $ctrlPath();
                self::$logInstance = $ctrInstance;
            }else{
                throw new \Exception("找不到filelog文件实现");
            }
        }
    }

    public function log($name){

    }
}