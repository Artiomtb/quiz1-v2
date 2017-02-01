<?php

/**
 * Class for getting product list from config.php and factory for product
 *
 * Class ProductCreator
 */
class ProductCreator
{
    /**
     * check create or not singleton
     * @var null
     */
    private static $instance = null;
    /**
     * config product name
     * @var array|mixed
     */
    private $config = [];

    /**
     * ProductCreator constructor.
     * select key products from config.php
     */
    private function __construct()
    {
        $this->config = require 'config.php';
    }

    /**
     * Returns singleton or creating
     * @return null|ProductCreator
     */
    public static function getInstance()
    {
        //check if initialized
        if (self::$instance == null) {
            //init
            self::$instance = new self();
        }

        return self::$instance;

    }

    /**
     *Protects from clonning
     */
    private function __clone()
    {
        //leave empty
    }

    /**
     * Protects from creation through unserialize
     */
    private function __wakeup()
    {
        //leave empty
    }

    /**
     * Returns product by its name
     *
     * @param string $name
     * @param array $value
     * @return ProductI
     * @throws \Exceptions\InvalidPostKeyException
     */
    public function make(string $name, array $value): ProductI
    {
        $result = null;
        if(array_key_exists($name,$this->config)){
            $result = new $this->config[$name]($value);
        }
        else {
            throw new \Exceptions\InvalidPostKeyException('Invalid product key');
        }
        return $result;
    }
}