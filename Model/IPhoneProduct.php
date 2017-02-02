<?php

namespace Model;

/**
 * Renderable for product IPhone
 * Class IphoneProduct
 * @package Model
 */
class IPhoneProduct implements Renderable {

    public $params;

    /**
     * IPhoneProduct constructor
     * @param array $params
     */
    public function __construct(array $params) {
        $this->params = $params;
    }

    /**
     * render method output params for IPhone
     * @return string
     */
    public function render():string {
        return "<h4>iPhone</h4>Color - ".$this->params['color']."<br/>Memory - ".$this->params['memory']."<br/>Version - ".$this->params['version']."<br/>$ - ".$this->params['price'];
    }
}