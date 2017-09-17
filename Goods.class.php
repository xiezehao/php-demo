<?php
abstract class Goods 
{
    public $name;//商品名称
    public $price;//商品价格
    public $msg;
    abstract public function __construct($msg);
    public function setName($name)
    {
        $this->name=$name;
    }

    public function getName()
    {
        echo $this->name;
    }

    public function setPrice($price)
    {
        $this->price=$price;
    }

    public function getPrice()
    {
        echo $this->price;
    }

    public function message()
    {
        echo $this->msg.':'.$this->name.':'.$this->price;
    }
}
