<?php
/**
 * Created by PhpStorm.
 * User: andrej
 * Date: 01.02.17
 * Time: 20:05
 */

namespace Model;

use Exceptions\InvalidPostKeyException;
use Exceptions\ClassNotFoundException;

/**
 * Class ProductCreator
 * @package Model
 */
class ProductCreator
{

    private static $instance = null;

    private $configArray;

    /**
     * Private ProductCreator constructor (demand of Singleton pattern)
     */
    private function __construct()
    {
        $this->configArray = include('config.php');
    }

    /**
     * @return ProductCreator Single instance of the creator.
     */
    public static function getInstance(): ProductCreator
    {
        if (self::$instance == null) {
            self::$instance = new ProductCreator();
        }
        return self::$instance;
    }

    /**
     * @param string $type
     * @param $properties
     * @return Renderable
     * @throws ClassNotFoundException
     * @throws InvalidPostKeyException
     */
    public function make(string $type, $properties): Renderable
    {

        if (!array_key_exists($type, $this->configArray)) {
            throw new InvalidPostKeyException();
        }

        $classNameVariable = $this->configArray[$type];

        if (!class_exists($classNameVariable)) {
            throw new ClassNotFoundException();
        }

        return new $classNameVariable($type, $properties);
    }
}