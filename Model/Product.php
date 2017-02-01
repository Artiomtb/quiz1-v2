<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 01.02.17
 * Time: 20:29
 */

namespace Model;

/**
 * Class Product
 * @package Model
 */
abstract class Product implements Renderable
{
    /**
     * @var array with product information
     */
    protected $data;

    /**
     * @var string product name
     */
    protected $productName;

    /**
     * Product constructor.
     * @param array $data with product info
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return string product name
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * return product information for render
     * @return string
     */
    public function render()
    {
        $productInfo = $this->getProductName();

        if (!empty($this->data)) {
            $productInfo .= ' [';
            foreach ($this->data as $key => $value) {
                $productInfo .= $key . ': ' . $value . '; ';
            }
            $productInfo .= ']';
        }

        return $productInfo;
    }
}