<?php

namespace Model;

/**
 * Class Product
 * @package Model
 */
abstract class Product implements Renderable
{
    /**
     * @var Product
     */
    public $device;
    /**
     * @var array
     */
    protected $deviceParams = [];

    public function setParam(string $nameParam, string $valueParam)
    {
        $this->deviceParams[$nameParam] = $valueParam;
    }

    /**
     * @return string
     */
    public function render()
    {
        $str = "<ul><b>$this->device</b>";
        foreach($this->deviceParams as $key => $param){
            $str .= "<li>$key: $param</li>";
        }
        $str .= "</ul>";
        return $str;
    }
}