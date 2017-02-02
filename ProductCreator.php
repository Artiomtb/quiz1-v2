<?php

/**
 * Class ProductCreator
 **/
use Exceptions\{
    ClassNotFoundException,
    InvalidPostKeyException
};
use Model\Product;
class ProductCreator
{
    const CONFIG_FILE = 'config.php';
    /**
     * @var null
     */
    private static $_instance = null;
    /**
     * @var array|mixed
     */
    private $config = [];

    /**
     * ProductCreator constructor
     **/
    private function __construct()
    {
        $this->config = include_once self::CONFIG_FILE;

    }

    /**
     * No clone object
     */
    private function __clone(){}
    private function __wakeup(){}

    /**
     * Returns ProductCreator
     * @return null|ProductCreator
     */
    public static function getInstance()
    {
        if(self::$_instance==null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * Create device
     * @param string $device
     * @param array $params
     * @return Product
     * @throws ClassNotFoundException
     * @throws InvalidPostKeyException
     */
    public function make(string $device, array $params) : Product
    {
        if(array_key_exists($device, $this->config)){
            if(class_exists($this->config[$device])){
                return new $this->config[$device]($device, $params);
            } else {
                throw new ClassNotFoundException("Class not found!");
            }
        } else {
            throw new InvalidPostKeyException("Model not found!");
        }
    }
}