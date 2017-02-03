<?php

namespace Model;

class IPadProduct implements Renderable
{
    private $options;

    function __construct($options)
    {
        $this->options = $options;
    }

    function render()
    {
        $result = print_r($this->options, true);
        return $result;
    }
}