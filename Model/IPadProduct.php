<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 01.02.17
 * Time: 20:29
 */

namespace Model;

/**
 * Class IPadProduct
 * @package Model
 */
class IPadProduct extends Product
{
    /**
     * @inheritdoc
     */
    public function __construct(array $data)
    {
        $this->productName = 'IPad';
        parent::__construct($data);
    }
}