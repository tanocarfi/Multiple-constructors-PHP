<?php
    require_once("Geometry/Circle.php");
    require_once("Geometry/Square.php");
    require_once("Geometry/Triangle.php");

    $t1 = Triangle::triangle(3, 4, 5);
    $t2 = Triangle::triangleRectangle(3, 4);
    $t3 = Triangle::triangleScalene(3);

    $t1->print()."\n";
    $t2->print()."\n";
    $t3->print()."\n";
?>