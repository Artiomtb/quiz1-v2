<?php
/**
 * Created by PhpStorm.
 * User: folg
 * Date: 2/1/17
 * Time: 7:46 PM
 */

namespace Controller;

class ProductCreator
{

    public static $telArray;

    private static $instance = null;

       public static function getInstance()
    {
        //check if initialized
        if (self::$instance == null) {
            //init
            self::$instance = new self();
        }

        return self::$instance;

    }

    private function __construct()
    {
        $array = include 'config.php';
        self::$telArray = $array;
    }
            private function __clone() {}
            private function __wakeup() {}
            private function __sleep() {}

    public function make(string $telephone, array $props) {

        return new self::$telArray[$telephone]($telephone, $props);

    }
}