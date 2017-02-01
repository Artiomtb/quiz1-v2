<?php

class ProductCreator{
    private static $instance = null;
    //private $devices = [];
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

    private function __construct()
    {
        //$this->devices = require "config.php";
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function make($device, $options){
        switch ($device){
            case 'iPhone':
                return new IPhoneProduct($options);
            case 'iPad':
                return new IPadProduct($options);
            case 'MacBook':
                return new MacBookProduct($options);
        }
    }
}
