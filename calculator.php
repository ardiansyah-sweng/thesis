<?php

use Shape3D as GlobalShape3D;

interface Shape
{
    public function area();
    public function perimeter();
}

interface Shape3D extends Shape
{
    public function volume();
}

class Rectangle implements Shape
{
    private $height;
    private $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }
    public function height()
    {
        return $this->height;
    }
    public function width()
    {
        return $this->width;
    }
    public function area()
    {
        return $this->width * $this->height;
    }
    public function perimeter()
    {
        return 2 * ($this->width + $this->height);
    }
}

class Ball implements Shape3D
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function radius()
    {
        return $this->radius;
    }
    public function area()
    {
    }
    public function perimeter()
    {
    }
    public function volume()
    {
        return 4 / 3 * pi() * ($this->radius * $this->radius);
    }
}

class Cone implements Shape3D
{
    public $radius;
    public $height;

    public function __construct($radius, $height)
    {
        $this->radius = $radius;
        $this->height = $height;
    }
    public function radius()
    {
        return $this->radius;
    }
    public function height()
    {
        return $this->height;
    }
    public function area()
    {
    }
    public function perimeter()
    {
    }
    public function volume()
    {
        return pi() * ($this->radius * $this->radius) * $this->height / 3;
    }
}

class Cube implements Shape3D
{
    private $width;

    public function __construct($width)
    {
        $this->width = $width;
    }
    public function width()
    {
        return $this->width;
    }
    public function area()
    {
    }
    public function perimeter()
    {
    }
    public function volume()
    {
        return $this->width * 3;
    }
}

class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function radius()
    {
        return $this->radius;
    }
    public function area()
    {
        return pi() * ($this->radius * $this->radius);
    }
    public function perimeter()
    {
        return 2 * pi() *  $this->radius;
    }
}

$rec = new Rectangle(5, 10);
$ball = new Ball(14);
$cone = new Cone(14, 20);
$cube = new Cube(5);
$circle = new Circle(21);
$shapes =  array($rec, $ball, $cone, $cube, $circle);



echo 'Area of rectangle : ' . $shapes[0]->area() . '<br />';
echo 'Length            : ' . $shapes[0]->height() . '<br />';
echo 'Width             : ' . $shapes[0]->width() . '<br />';
echo '<br>';
echo 'Volume of ball    : ' . $shapes[1]->volume() . '<br />';
echo 'Radius            : ' . $shapes[1]->radius() . '<br />';
echo '<br>';
echo 'Volume of Cone    : ' . $shapes[2]->volume() . '<br />';
echo 'Radius            : ' . $shapes[2]->radius() . '<br />';
echo 'Height            : ' . $shapes[2]->height() . '<br />';
echo '<br>';
echo 'Volume of Cube    : ' . $shapes[3]->volume() . '<br />';
echo 'Width             : ' . $shapes[3]->width() . '<br />';
echo '<br>';
echo 'Circumference     : ' . $shapes[4]->perimeter() . '<br />';
echo 'Radius            : ' . $shapes[4]->radius() . '<br />';
echo '<br>';