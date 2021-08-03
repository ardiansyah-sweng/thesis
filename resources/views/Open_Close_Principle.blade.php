<?php

interface Shape {
    public function area();
}

class Square implements Shape{
    public $height;
    public $width;
    public function area()
    {
        return $this->width * $this->height;
    }
}

class Circle implements Shape{
    public $radius;
    public function area()
    {
        return pi() * ($this->radius * $this->radius);
    }
}

class Triangle implements Shape{
    public $base;
    public $height;
    public function area()
    {
        return $this->height * $this->base/2;
    }
}

class AreaCalculator{
    public function calculate(Shape $shape)
    {
        $area = [];

        foreach($shape as $shape)
        {
            $area[] = $shape->area();
        }
        return array_sum($area);
    }
}
?>