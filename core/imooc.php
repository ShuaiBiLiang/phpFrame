<?php
/**
 * Created by PhpStorm.
 * User: liang
 * Date: 2018/1/3
 * Time: 23:14
 */
namespace  core;

class imooc
{
    public $data;
    public static $classMap = array();

    static public function run(){
        dump('imooc run...入口文件，请求分发代码块。');
        $route = new \core\route();
        $ctrlName = $route->controllerName;
        $actionName = $route->actionName;
        $params = $route->paramsArray;
        $targetPath = CONTROLLER.'\\'.$ctrlName.'.php';
        if(is_file($targetPath)){
            $ctrlPath = '\\app\\controller\\'.$ctrlName;
            $ctrInstance = new $ctrlPath();
            $ctrInstance->$actionName($params);
        }
    }

    static public function load($class){
        if(isset($classMap[$class])){
            return true;
        }else {
            $class = str_replace('\\','/',$class);
            $fileName = IMOOC.'/'.$class.'.php';
            if(is_file($fileName)){
                include $fileName;
                self::$classMap[$class] = $class;
            }else{
                return false;
            }
        }
    }

    public function assign($key,$value){
        $this->data[$key] = $value;
    }

    public function display($fileName){
        $realFileName = VIEW.'/'.$fileName;
        if(is_file($realFileName)){
            extract($this->data);
            include $realFileName;
        }else{
            throw new \Exception("The defined fileName: ".$fileName." is not Exist!");
        }
    }

    public function displayTwig($fileName, $params = array()){
//        \Twig_Autoloader::register();
        $realFileName = VIEW.'/'.$fileName;
        if(is_file($realFileName)){
            $loader = new \Twig_Loader_Filesystem(VIEW);
            $twig = new \Twig_Environment($loader, array(
                'cache' => VIEW.'/cache',
                'debug' => true,
            ));
//            $twig->render('index.html', array('name' => 'Fabien'));
            $twig->display('index.html', array('name' => 'Fabien1'));
        }else{
            throw new \Exception("The defined fileName: ".$fileName." is not Exist!");
        }

    }

    public static function getConf($name,$fileName){
        $realFileName = CONF.'/'.$fileName.'.php';
        if(is_file($realFileName)){
            $tempArray = include $realFileName;
            return $tempArray[$name];
        }else{
            throw new \Exception("The defined fileName: ".$fileName." is not Exist!");
        }
    }
}
