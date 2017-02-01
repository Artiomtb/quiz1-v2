<?php

namespace Model;

/**
 * Created by PhpStorm.
 * User: maxw
 * Date: 01.02.17
 * Time: 19:53
 */
abstract class Product implements Renderable
{

    /**
     * @var string
     */
    public $typeProduct;

    /**
     * @var string
     */
    public $memory;
    /**
     * @var string
     */
    public $price;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function render() {
        return "<b> Type of product: " . $this->typeProduct. "</b><br />" .
            "memory: " . $this->memory . "<br />" .
            "price: " . $this->price;

    }

}