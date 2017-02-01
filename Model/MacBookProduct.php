<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 01.02.17
 * Time: 20:29
 */

namespace Model;

/**
 * Class MacBookProduct
 * @package Model
 */
class MacBookProduct extends Product
{
    /**
     * @inheritdoc
     */
    public function __construct(array $data)
    {
        $this->productName = 'MacBook';
        parent::__construct($data);
    }

    /**
     * @inheritdoc
     */
    public function render()
    {
        return $this->getProductName() . ' [ MacBook is awesome! ]';
    }
}