<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 01.02.17
 * Time: 20:15
 */

namespace Model;

/**
 * Interface Renderable for every class that can be rendered for client
 * @package Model
 */
interface Renderable
{
    /**
     * render method
     * @return mixed
     */
    public function render();
}