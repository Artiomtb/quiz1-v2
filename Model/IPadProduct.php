<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 03.02.17
 * Time: 16:07
 * Class IPadProduct
 */

namespace Model;

class IPadProduct implements Renderable {
    public $description;
    /*
     * Class IPadProduct
     * IPadProduct constructor.
     */
    public function __construct(array $description) {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function render(): string {
        $output  = "<h2>iPad</h2>";
        $output .= "<p>Color: <strong>".$this->description['color']."</strong></p>";
        $output .= "<p>Capacity: <strong>".$this->description['memory']."</strong></p>";
        $output .= "<p>Version: <strong>".$this->description['version']."</strong></p>";
        $output .= "<p>Price: <strong>".$this->description['price']."</strong></p><br /><hr />";

        return $output;
    }
}