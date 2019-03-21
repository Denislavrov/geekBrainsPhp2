<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 21/03/2019
 * Time: 06:45
 */

abstract class Products
{
    public $name;
    public $price;

    function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    protected function getSum($sum)
    {
        return $sum;
    }
}

class digitalProduct extends Products
{

    function __construct($name, $price)
    {
        parent::__construct($name, $price);
    }
}


class countProduct extends Products
{

    function __construct($name, $price, $count)
    {
        $this->count = $count;
        parent::__construct($name, $price);
    }
}


class weightCount extends Products
{

    function __construct($name, $price, $weight)
    {
        $this->weight = $weight;
        parent::__construct($name, $price);
    }
}






