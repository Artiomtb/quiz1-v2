<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 03.02.17
 * Time: 19:21
 * Singleton class ProductCreator
 */
use Model\Renderable;

/**
 * Class ProductCreator
 */
class ProductCreator {

    private $description = array();

     private static $instance = null;

    /**
     * ProductCreator constructor.
     */
    private function __construct() {
        $this->description = include_once("config.php");
    }

    /**
     * @return null|ProductCreator
     */
    public static function getInstance() {
        if(empty(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

      public function make(string $deviceTitle, array $deviceDescription): Renderable {
        if(array_key_exists($deviceTitle, $this->description)){
            if(class_exists($this->description[$deviceTitle])){
                return new $this->description[$deviceTitle]($deviceDescription);
            } else {
                throw new ClassNotFoundException("Class ".$deviceTitle." not found!");
            }
        } else {
            throw new InvalidPostKeyException("Model ".$deviceTitle." not found!");
        }
    }
}