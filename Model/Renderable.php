<?php
/**
 * Created by PhpStorm.
 * User: folg
 * Date: 2/1/17
 * Time: 7:42 PM
 */

namespace Model;

abstract class Renderable
{
    public $arr;
    public $tel;

    public function __construct(string $tel, array $params) {
        $this->arr = $params;
        $this->tel = $tel;
        //var_dump($this->arr);



    }

    public function render() {

        $tmpString = '';

        foreach ($this->arr as $key=>$value){
            $tmpString = $tmpString.'<dd>'.$key." - ".$value."</dd>";
        }

        return '<h1>'.$this->tel.'</h1>'.$tmpString.'<br>';
    }
}