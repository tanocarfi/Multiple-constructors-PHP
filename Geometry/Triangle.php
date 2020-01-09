<?php
   require_once("Shape.php");
   use Geometry\Shape;

   class Triangle extends Shape{

      private $side_a = 0;
      private $side_b = 0;
      private $side_c = 0;

      // Multiple constructors
      private function __construct() {}

      public static function triangle($side_a, $side_b, $side_c) {
         // instance of an object made in the method and return 
         $triangle = new static();
         $triangle->side_a = $side_a;
         $triangle->side_b = $side_b;
         $triangle->side_c = $side_c;
         return $triangle;
      }

      public static function triangleRectangle($side_a, $side_b) {
         // instance of an object made in the method and return 
         $triangleRectangle = new static();
         $triangleRectangle->side_a = $side_a;
         $triangleRectangle->side_b = $side_b;
         return $triangleRectangle;
      }

      public static function triangleScalene($side_a) {
         // instance of an object made in the method and return 
         $triangleScalene = new static();
         $triangleScalene->side_a = $side_a;
         return $triangleScalene;
      }

      public function getPerimeter(){
         return $this->side_a + $this->side_b + $this->side_c;
      }

      public function getArea(){
         // una funzione con if
         if (isset($this->side_a) && isset($this->side_b) && isset($this->side_c)) {
            // area triangle with erone formula
            $perimeter = $this->getPerimeter();
            $semiPerimeter = $perimeter / 2;
            return sqrt($semiPerimeter*($semiPerimeter-$this->side_a)*($semiPerimeter-$this->side_b)*($semiPerimeter-$this->side_c));
         } else if (isset($this->side_a) && isset($this->side_b)) {
            // area triangle rectangle
            return ($this->side_a * $this->side_b) / 2;
         } else {
            // area triangle with one side
            return (sqrt(3)/4) * pow($this->side_a, 2);
         }
      }
   }
?>