<?php
    require_once("Shape.php");
    use Geometry\Shape;

    class Rectangle extends Shape{

        public $base;
        public $height;

        public function __construct($base, $height){
            $this->base = $base;
            $this->height = $height;
        }

        public function getPerimeter(){
            return $this->base * 2 + $this->height * 2;
        }

        public function getArea(){
            return $this->base * $this->height;
        }
    }
?>