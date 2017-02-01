<?php

namespace Model;

include_once "ProductI.php";

/**
 * Implementation of ProductI, Renderable for product MacBook
 * Class MacBookProduct
 * @package Model
 */
class MacBookProduct implements \ProductI, Renderable
{
    /**
     * @var array
     */
    public $params;

    /**
     * MacBookProduct constructor create array of property
     * @param array $value
     */
    function __construct(array $value)
    {
        $this->params = $value;
    }

    /**
     * ToString method, write properties product inline
     * @return string
     */
    function render():string
    {
        $res = "MacBook: Memory: ".$this->params['memory']." Size: ".$this->params['size']." Year: ".$this->params['year']." Price: ".$this->params['price'];
        return $res;
    }
}