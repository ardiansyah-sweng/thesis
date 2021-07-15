<?php

use Bentuk3D as SemuaBentuk;

interface Bentuk
{
    public function area();
    public function perimeter();
}

interface Bentuk3D extends Bentuk
{
    public function volume();
}

class Segitiga implements Bentuk
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

class Bola implements Bentuk3D
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

class Kerucut implements Bentuk3D
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

class Kubus implements Bentuk3D
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

class Lingkaran implements Bentuk
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

$persegi_panjang = new Persegi_Panjang(5, 10);
$bola = new Bola(14);
$kerucut = new Kerucut (14, 20);
$kubus = new Kubus(5);
$lingkaran = new Lingkaran(21);
$bentuk =  array($persegi_panjang, $bola, $kerucut, $kubus, $lingkaran);



echo 'Area of rectangle : ' . $bentuk[0]->area() . '<br />';
echo 'Length            : ' . $bentuk[0]->height() . '<br />';
echo 'Width             : ' . $bentuk[0]->width() . '<br />';
echo '<br>';
echo 'Volume of ball    : ' . $bentuk[1]->volume() . '<br />';
echo 'Radius            : ' . $bentuk[1]->radius() . '<br />';
echo '<br>';
echo 'Volume of Cone    : ' . $bentuk[2]->volume() . '<br />';
echo 'Radius            : ' . $bentuk[2]->radius() . '<br />';
echo 'Height            : ' . $bentuk[2]->height() . '<br />';
echo '<br>';
echo 'Volume of Cube    : ' . $bentuk[3]->volume() . '<br />';
echo 'Width             : ' . $bentuk[3]->width() . '<br />';
echo '<br>';
echo 'Circumference     : ' . $bentuk[4]->perimeter() . '<br />';
echo 'Radius            : ' . $bentuk[4]->radius() . '<br />';
echo '<br>';