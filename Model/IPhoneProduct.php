<?php
/**
 * Created by PhpStorm.
 * User: maxw
 * Date: 01.02.17
 * Time: 20:34
 */

namespace Model;


class IPhoneProduct extends Product
{
    /**
     * @var string
     */
    public $color;

    /**
     * @var string
     */
    public $version;

    /**
     * @return string
     */
    public function render()
    {
        return parent::render() . "<br />" .
        "color: " . $this->color . "<br />" .
        "version: " . $this->version;
    }

}