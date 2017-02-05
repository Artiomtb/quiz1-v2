<?php

/**
 * Created by PhpStorm.
 * User: don-szpion
 * Date: 01.02.17
 * Time: 20:23
 */
class IPadProduct implements Renderable
{
  public $memory;
  public $color;
  public $price;
  public $version;
  public function __construct(array $params)
  {
    $this->memory = $params['memory'];
    $this->color = $params['color'];
    $this->price = $params['price'];
    $this->version = $params['version'];
  }
  public function render(){
      return $this->memory."memory".$this->color."color".$this->price."price".$this->version."version";
  }
}