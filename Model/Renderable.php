<?php
/**
 * Created by PhpStorm.
 * User: andrej
 * Date: 01.02.17
 * Time: 19:59
 */

namespace Model;

/**
 * Interface Renderable
 * @package Model
 */
interface Renderable
{
    /**
     * @return string
     */
    function render(): string;
}