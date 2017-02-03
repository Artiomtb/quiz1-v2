<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 03.02.17
 * Time: 16:07
 * Class MacBookProduct
 */

namespace Model;

class MacBookProduct implements Renderable {
     public $description;
    /*
     * Class MacBookProduct
     * MacBookProduct constructor.
     */
    public function __construct(array $description) {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function render(): string {
        $output  = "<h2>MacBook</h2>";
        $output .= "<p>Capacity: <strong>".$this->description['memory']."</strong></p>";
        $output .= "<p>Version: <strong>".$this->description['size']."</strong></p>";
        $output .= "<p>Year: <strong>".$this->description['year']."</strong></p>";
        $output .= "<p>Price: <strong>".$this->description['price']."</strong></p>";

        return $output;
    }
}