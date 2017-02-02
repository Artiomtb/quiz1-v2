<?php

use Model\Renderable;

class ProductCreator {

    private static $instance = null;

    private $config = [];

    private function __construct() {

        $this->config = include ("config.php");
    }

    public static function getInstance() {

        if (self::$instance == null) {
            
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function __clone() {
        //empty
    }

    public function make(string $key, array $value): Renderable {

        if(array_key_exists($key, $this->config)){
            
            return new $this->config[$key]($value);
        }        
    }
}