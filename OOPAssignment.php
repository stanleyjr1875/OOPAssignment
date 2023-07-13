<?php
abstract class Shape {
    protected $name;
    abstract public function description();
}

interface IShape {
    public function getArea($length, $width = null);
    public function getPerimeter($length, $width = null);
}

class Square extends Shape implements IShape {
    public function description() {
        return "Square has four equal sides.\n";
    }

    public function getArea($length, $width = null) {
        if ($width !== null && $length !== $width) {
            return "Invalid: Square's length and width should be equal.\n";
        }
        return $length * $length;
    }

    public function getPerimeter($length, $width = null) {
        if ($width !== null && $length !== $width) {
            return "Invalid: Square's length and width should be equal.\n";
        }
        return 4 * $length;
    }
}

class Rectangle extends Shape implements IShape {
    public function description() {
        return "Rectangle has two equal sides.\n";
    }

    public function getArea($length, $width = null) {
        return $length * $width;
    }

    public function getPerimeter($length, $width = null) {
        return 2 * ($length + $width);
    }
}

class Triangle extends Shape implements IShape {
    public function description() {
        return "Triangle has three sides.\n";
    }

    public function getArea($length, $width = null) {
        return ($length * $width) / 2;
    }

    public function getPerimeter($length, $width = null, $side3 = null) {
        return $length + $width + $side3;
    }
}

class Circle extends Shape implements IShape {
    public function description() {
        return "Circle has no sides, only a curve.\n";
    }

    public function getArea($length, $width = null) {
        $radius = $length; 
        return pi() * $radius * $radius;
    }

    public function getPerimeter($length, $width = null) {
        $radius = $length; 
        return 2 * pi() * $radius;
    }
}

$shape1 = new Square();
echo $shape1->description();
echo $shape1->getArea(4, 4) . "\n<br>";
echo $shape1->getArea(4, 3) . "\n<br>";
echo $shape1->getPerimeter(4, 4) . "\n<br>";
echo $shape1->getPerimeter(4, 3) . "\n<br>";

$shape2 = new Rectangle();
echo $shape2->description();
echo $shape2->getArea(4, 6) . "\n<br>";
echo $shape2->getPerimeter(4, 6) . "\n<br>";

$shape3 = new Triangle();
echo $shape3->description();
echo $shape3->getArea(4, 6) . "\n<br>";
echo $shape3->getPerimeter(4, 6, 7) . "\n<br>";

$shape4 = new Circle();
echo $shape4->description();
echo $shape4->getArea(5) . "\n<br>";
echo $shape4->getPerimeter(5) . "\n<br>";

?>