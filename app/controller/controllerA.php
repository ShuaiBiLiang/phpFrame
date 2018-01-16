<?php
/**
 * Created by PhpStorm.
 * User: liang
 * Date: 2018/1/5
 * Time: 15:12
 */
namespace  app\controller;
use core\imooc;

class controllerA extends imooc
{

    public function actionB($params=array()){
        $instance = new \core\logg\loger();
        $instance::getInstance()->log('access in [controllerA/actionB]',$params);
        $model = new \core\Model();
        try{
            $result = $model->database->select('reviews', array(
                'reviews_id',
                'customers_name'
            ), array(
                'reviews_id' => 1
            ));
            dump($result);
            $this->assign('paramA','Fcuking the hole!!!');
            $this->display('testview.html');

            $this->displayTwig('index.html');

//            get result from PDO ！
//            $ret = $model->query('select * from reviews');
//            p($ret->fetchAll());
        }catch (\Exception $e){
            p($e->getMessage());
        }

    }

    public function listGuestBook($params=array()){
        $instance = new \core\logg\loger();
        $instance::getInstance()->log('listGuestBook',$params);
        $model = new \core\Model();
        try{
            $result = $model->database->select('reviews', array(
                'reviews_id',
                'customers_name'
            ), array(
                'reviews_id' => 1
            ));
            dump($result);
            $this->assign('paramA','Fcuking the hole!!!');
            $this->display('testview.html');

//            get result from PDO ！
//            $ret = $model->query('select * from reviews');
//            p($ret->fetchAll());
        }catch (\Exception $e){
            p($e->getMessage());
        }

    }
}