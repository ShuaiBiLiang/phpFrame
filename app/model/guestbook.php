<?php
/**
 * Created by PhpStorm.
 * User: liang
 * Date: 2018/1/5
 * Time: 15:12
 */
namespace  app\model;
use core\Model;

class guestbook extends Model
{
    public $name;
    public $content;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

}