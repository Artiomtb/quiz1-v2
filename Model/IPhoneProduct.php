<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 03.02.17
 * Time: 16:06
 * Class IPhoneProduct
 */

namespace Model;
/**
 * Class IPhoneProduct
 * @package Model
 */

class IPhoneProduct implements Renderable {
    public $description;

    /**
     * IPhoneProduct constructor.
     * @param array $description
     */

    public function __construct(array $description) {
        $this->description = $description;
    }

    public function render(): string {
        $output  = "<h2>iPhone</h2>";
        $output .= "<p>Color: <strong>".$this->description['color']."</strong></p>";
        $output .= "<p>Capacity: <strong>".$this->description['memory']."</strong></p>";
        $output .= "<p>Version: <strong>".$this->description['version']."</strong></p>";
        $output .= "<p>Price: <strong>".$this->description['price']."</strong></p><br /><hr />";

        return $output;
    }
}