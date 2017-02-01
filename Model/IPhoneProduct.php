<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 01.02.17
 * Time: 20:29
 */

namespace Model;

/**
 * Class IPhoneProduct
 * @package Model
 */
class IPhoneProduct extends Product
{
    /**
     * @inheritdoc
     */
    public function __construct(array $data)
    {
        $this->productName = 'IPhone';
        parent::__construct($data);
    }
}