<?php

namespace Model;

include_once "ProductI.php";

/**
 * Implementation of ProductI, Renderable for product iPad
 * Class IPadProduct
 * @package Model
 */
class IPadProduct implements \ProductI, Renderable
{
    /**
     * @var array
     */
    public $params;

    /**
     * IPadProduct constructor create array of property
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
        $res = "iPad: Color: ".$this->params['color']." Memory: ".$this->params['memory']." Version: ".$this->params['version']." Price: ".$this->params['price'];
        return $res;
    }
}