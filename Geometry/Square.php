<?php
    require_once("Shape.php");
    use Geometry\Shape;

    class Square extends Shape{
        public $side;

        public function __construct($side){
            $this->side = $side;
        }

        public function getPerimeter(){
            return $this->side * 4;
        }

        public function getArea(){
            return pow($this->side, 2);
        }
    }
?>