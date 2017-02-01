<?php

/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 01.02.17
 * Time: 20:15
 */
class ProductCreator
{
    /**
     * @var ProductCreator object
     */
    protected static $_instance;

    /**
     * @var array products mapping product name => class
     */
    private $productMap;

    /**
     * ProductCreator constructor.
     * @param array $productMap
     */
    private function __construct(array $productMap)
    {
        $this->productMap = $productMap;
    }

    /**
     * get class instance
     * @return ProductCreator
     */
    public static function getInstance(){

        if(null === self::$_instance){
            $map = include 'config.php';
            self::$_instance = new self($map);
        }
        return self::$_instance;
    }

    /**
     * Create and return product class
     *
     * @param string $key product name
     * @param array $data product data
     * @return \Model\Product product class
     * @throws \Exceptions\InvalidProductKeyException when given wrong product name
     * @throws \Exceptions\ClassNotFoundException when product class not found
     */
    public function make(string $key, array $data)
    {
        if(!isset($this->productMap[$key])){
            throw new \Exceptions\InvalidProductKeyException('Invalid Product Key : '.$key);
        }

        if(!class_exists($this->productMap[$key])){
            throw new \Exceptions\ClassNotFoundException('Class '.$this->productMap[$key].' not found.');
        }

        return new $this->productMap[$key]($data);
    }

}