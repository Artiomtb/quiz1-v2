<?php

use Exceptions\InvalidPostKeyException;
use Model\Renderable;

/**
 * Singleton class for getting values from config and make products by factory
 *
 * Class ProductCreator
 */
class ProductCreator {

    private static $instance = null;

    private $config = [];

    /**
     * ProductCreator constructor
     */
    private function __construct() {

        $this->config = include ("config.php");
    }

    /**
     * Returns ProductCreator unique ex
     *
     * @return ProductCreator
     */
    public static function getInstance() {

        if (self::$instance == null) {
            
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function __clone() {
        //empty
    }

    /**
     * Factory, make products
     *
     * @param string $key
     * @param array $value
     * @return mixed|object
     * @throws InvalidPostKeyException
     */
    public function make(string $key, array $value): Renderable {

        if(array_key_exists($key, $this->config)){
            
            return new $this->config[$key]($value);
        } else {
            throw new InvalidPostKeyException('Key is invalid');
        }
    }
}