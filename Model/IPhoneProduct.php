<?php

namespace Model;

class IPhoneProduct implements Renderable {

	public $params;
    
    public function __construct(array $params) {
        $this->params = $params;
    }

    public function render():string {
        return "<h4>iPhone</h4>Color - ".$this->params['color']."<br/>Memory - ".$this->params['memory']."<br/>Version - ".$this->params['version']."<br/>$ - ".$this->params['price'];
    }
}