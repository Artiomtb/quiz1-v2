<?php

use Exceptions\ClassNotFoundException;
use Exceptions\InvalidPostKeyException;

/**
 * Created by PhpStorm.
 * User: maxw
 * Date: 01.02.17
 * Time: 20:06
 */
class ProductCreator
{
    /**
     * @var $_instance
     */
    protected static $_instance;

    /**
     * @var array
     */
    private $map;

    /**
     * ProductCreator constructor.
     */
    private function __construct()
    {
        $this->map = require_once(__DIR__ . "/config.php");
    }

    /**
     *
     */
    private function __clone()
    {

    }

    /**
     *
     */
    private function __wakeup()
    {

    }

    /**
     * @return ProductCreator
     */
    public static function getInstance()
    {
        if (null == self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * Create Product
     * @param string $typeProduct
     * @param array $params
     * @return mixed
     * @throws ClassNotFoundException
     * @throws InvalidPostKeyException
     */
    public function make(string $typeProduct, array $params)
    {


        if (array_key_exists($typeProduct, $this->map)) {

            if (class_exists($this->map[$typeProduct])) {
                $product = new $this->map[$typeProduct]();
                $product->typeProduct = $typeProduct;

                foreach ($params as $key => $value) {
                    $product->$key = $value;
                }
                return $product;


            } else {
                throw new Exceptions\ClassNotFoundException("Нету класса!");
            }

        } else {
            throw new Exceptions\InvalidPostKeyException("Нету модели!");
        }

    }

}