<?php

namespace Model;

class MacBookProduct implements Renderable {
	
	public $params;
    
    public function __construct(array $params) {
        $this->params = $params;
    }
    
    public function render():string {
        return "<h4>MacBook</h4>Memory - ".$this->params['memory']."<br/>Size - ".$this->params['size']."<br/>Year - ".$this->params['year']."<br/>$ - ".$this->params['price'];
    }
}