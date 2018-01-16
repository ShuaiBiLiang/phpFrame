<?php
/**
 * 课程地址：http://github.com/kphcdr/ppphp
 */

require 'vendor/autoload.php';

//define('IMOOC',realpath(' /'));  //in macOS
define('IMOOC',str_replace('\\','/',dirname(realpath(__FILE__))));
define('CORE',IMOOC.'/core');
define('APP',IMOOC.'/app');
define('VIEW',IMOOC.'/app/view');
define('CONTROLLER',IMOOC.'/app/controller');
define('CONF',IMOOC.'/core/conf');
define('DEBUG',true);


if(DEBUG){
    ini_set('display_errors','On');
}else{
    ini_set('display_errors','Off');
}
include CORE.'/common/function.php';
include CORE.'/imooc.php';

spl_autoload_register('\core\imooc::load');
\core\imooc::run();



//include IMOOC.'/test/jsonAndSer.php';
//use test\jsonAndSer;
//$j = new jsonAndSer();
//$j->go();