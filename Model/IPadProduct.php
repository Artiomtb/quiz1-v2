<?php

namespace Model;

/**
 * Renderable for product IPad
 * Class IPadProduct
 * @package Model
 */
class IPadProduct implements Renderable {

    public $params;

    /**
     * IPadProduct constructor
     * @param array $params
     */
    public function __construct(array $params) {
        $this->params = $params;
    }

    /**
     * render method output params for IPad
     * @return string
     */
    public function render():string {
        return "<h4>iPad</h4>Color - ".$this->params['color']."<br/>Memory - ".$this->params['memory']."<br/>Version - ".$this->params['version']."<br/>$ - ".$this->params['price'];
    }
}