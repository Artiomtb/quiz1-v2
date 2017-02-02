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

    public function __construct(string $device, array $valueParam)
    {
        $this->device = $device;
        foreach ($valueParam as $key => $value){
            $this->deviceParams[$key] = $value;
        }
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