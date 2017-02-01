<?php
/**
 * Created by PhpStorm.
 * User: maxw
 * Date: 01.02.17
 * Time: 20:34
 */

namespace Model;


class MacBookProduct extends Product
{
    public $size;
    public $year;

    /**
     * @return string
     */
    public function render()
    {
        return parent::render() . "<br />" .
            "size: " . $this->size . "<br />" .
            "year: " . $this->year;
    }
}