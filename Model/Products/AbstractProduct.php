<?php
/**
 * Created by PhpStorm.
 * User: andrej
 * Date: 01.02.17
 * Time: 20:25
 */

namespace Model\Products;

use Model\Renderable;

/**
 * Class AbstractProduct
 * @package Model\Products
 */
abstract class AbstractProduct implements Renderable
{
    private $properties;
    private $type;

    /**
     * AbstractProduct constructor.
     * @param string $typeAsArg Type of a product.
     * @param $propertiesAsArgs array of properties of a product.
     */
    public function __construct(string $typeAsArg, $propertiesAsArgs)
    {
        $this->properties = $propertiesAsArgs;
        $this->type = $typeAsArg;
    }

    /**
     * @return string Html view of a product.
     */
    public function render(): string
    {
        $stringToReturn = "ProductName: " . $this->type . ";  Properties: <br>";
        foreach ($this->properties as $propertyName => $property) {
            $stringToReturn .= $propertyName . " : " . $property . "<br>";
        }
        return $stringToReturn;
    }
}