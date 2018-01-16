<?php
/**
 * Created by PhpStorm.
 * User: liang
 * Date: 2018/1/3
 * Time: 23:25
 */

namespace core;


class route
{
    public $controllerName;
    public $actionName;
    public $paramsArray;
    /**
     * route constructor.
     */
    public function __construct()
    {
        $controllerName='';
        $methodName='';
        p('ok');
        p($_SERVER['REQUEST_URI']);
        //1:打印url的值。
        $uri = $_SERVER['REQUEST_URI'];
        $uri = substr($uri,strpos($uri,'index.php')+8);
        //2:截取controller，action，params
        $uriArray = explode( '/', $uri );
        p($uriArray);
        $count = count($uriArray);

        $this->controllerName = $uriArray[1];
        $this->actionName = $uriArray[2];
        $paramsArray = array();
        for ($i = 4; $i < $count; $i++) {
            if(isset($uriArray[$i]) && $i%2==0){
                $paramsArray[$uriArray[$i-1]]= $uriArray[$i];
            }
        }
        $this->paramsArray = $paramsArray;


    }


}