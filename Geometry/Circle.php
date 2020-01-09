<?php
    require_once("Shape.php");
    use Geometry\Shape;

    class Circle extends Shape{

        public $radius;

        public function __construct($radius){
            $this->radius = $radius;
        }

        public function getPerimeter(){
            return 2 * pi() * $this->radius;
        }

        public function getArea(){
            return pow($this->radius, 2) * pi();
        }
    }
?>