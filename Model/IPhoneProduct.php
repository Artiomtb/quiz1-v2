<?php


namespace Model;

include_once "ProductI.php";

/**
 * Implementation of ProductI, Renderable for product iPhone
 * Class IPhoneProduct
 * @package Model
 */
class IPhoneProduct implements \ProductI,Renderable
{
    /**
     * @var array
     */
    public $params;

    /**
     * IPhoneProduct constructor create array of property
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
        $res = "iPhone: Color: ".$this->params['color']." Memory: ".$this->params['memory']." Version: ".$this->params['version']." Price: ".$this->params['price'];
        return $res;
    }
}