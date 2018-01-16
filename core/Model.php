<?php
/**
 * Created by PhpStorm.
 * User: liang
 * Date: 2018/1/5
 * Time: 16:25
 */
namespace core;

use core\imooc;
use Medoo\Medoo;


class Model extends Medoo {

    public $database;

    public function __construct()
    {
        echo imooc::getConf('dsn', 'database');

        $database2 = new Medoo(array(
            'database_type' => 'mysql',
            'database_name' => 'zencart',
            'server' => '127.0.0.1',
            'username' => 'root',
            'password' => ''
        ));
        $this->database = $database2;
        parent::__construct($database2);
//        use PDO
//        $dsn='mysql:dbname=zencart;host=127.0.0.1';
//        $username='root';
//        $passwd='';
//        parent::__construct($dsn, $username, $passwd);
    }
}