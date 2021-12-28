<?php
abstract class Shop_product
{
    protected $title;
    protected $price;
    protected $final_income;
    public function __construct($title)
    {
        $this->title=$title;
    }

    public function __destruct()
    {
        echo 'object destruct';
    }

    public function getTitle(){
        return $this->title;
    }
    public function getPrice(){
        return $this->price;
    }
    abstract public function setPrice($price);
    abstract public function finalIncome($price);
}

class Digital_product extends Shop_product
{
    public function setPrice($price)
    {
        $this->price=$price/2;
    }

    public function finalIncome($price){
        $this->final_income +=$price;
    }
}

class One_product extends Shop_product
{
    public function setPrice($price)
    {
        $this->price=$price;
    }
    public function finalIncome($price){
        $this->final_income +=$price;
    }
}

class Pound_product extends Product
{
    protected $pound;
    public function setPound($pound)
    {
        $this->pound=$pound;
    }
    public function setPrice($price)
    {
        $this->price=$price;
    }

    public function calculatePrice($price,$pound)
    {
        $this->price=$price*$pound;
    }
    public function finalIncome($price){
        $this->final_income +=$price;
    }
}

namespace Traits;

trait Singleton
{
    private static $instances = [];
    public static function single()
    {
        if (!isset(self::$instances[static::class])) {
            self::$instances[static::class] = new static;
        }
        return self::$instances[static::class];
    }
}