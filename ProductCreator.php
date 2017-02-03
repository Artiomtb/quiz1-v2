<?php

class ProductCreator
{
    private static $instance = null;

    private $devices;

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

    private function __construct()
    {
        $this->devices = require "config.php";
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function make($device, $options)
    {
        if (array_key_exists($device, $this->devices)) {
            if (class_exists($this->devices[$device])) {
                return new $this->devices[$device]($options);
            } else {
                throw new ClassNotFoundException("Class not found");
            }
        } else {
            throw new InvalidPostKeyException("Product not found");
        }
    }
}
