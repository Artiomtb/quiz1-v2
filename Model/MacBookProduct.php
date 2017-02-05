<?php

/**
 * Created by PhpStorm.
 * User: don-szpion
 * Date: 01.02.17
 * Time: 20:23
 */
class MacBookProduct
{
    public $memory;
    public $color;
    public $price;
    public $year;
    public function __construct(array $params){
        $this->memory = $params['memory'];
        $this->color = $params['color'];
        $this->price = $params['price'];
        $this->year = $params['year'];
    }
    public function render(){
        return $this->memory."memory".$this->color."color".$this->price."price".$this->year."year";
    }
}