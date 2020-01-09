<?php
    namespace Geometry{

        abstract class Shape{
            protected abstract function getPerimeter();
            protected abstract function getArea();

            public function print(){
                echo "This is a pretty little shaped " . strtolower(get_class($this)) . "!\n";
                echo "Its perimeter is equal to " . $this->getPerimeter() . "\n";
                echo "Its area is equal to " . $this->getArea() . "\n";
            }
        }
    }

?>