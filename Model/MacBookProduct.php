<?php

namespace Model;

/**
 * Renderable for product MacBook
 * Class MacBookProduct
 * @package Model
 */
class MacBookProduct implements Renderable {
	
    public $params;

    /**
     * MacBookProduct constructor
     * @param array $params
     */
    public function __construct(array $params) {
        $this->params = $params;
    }

    /**
     * render method output params for MacBook
     * @return string
     */
    public function render():string {
        return "<h4>MacBook</h4>Memory - ".$this->params['memory']."<br/>Size - ".$this->params['size']."<br/>Year - ".$this->params['year']."<br/>$ - ".$this->params['price'];
    }
}