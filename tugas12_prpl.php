<?php

interface Prokalkulator
{
    public function cal();
}

class Lpersegi implements Prokalkulator
{
    public $panjang;
    public $lebar;
    public function cal()
    {
        return $this->panjang * $this->lebar;
    }
}

class Volbola implements Prokalkulator
{
    public $jari;
    public $phi;
    public function cal()
    {
        return (4/3) * $this->phi * $this->jari * $this->jari;
    }
}

class Volkerucut implements Prokalkulator
{
    public $tinggi;
    public $jari;
    public $phi;
    public function cal()
    {
        return (1/3) * $this->phi * $this->jari * $this->jari * $this->jari * $this->tinggi;
    }
}

class Volkubus implements Prokalkulator
{
    public $rusuk;
    public function cal()
    {
        return     $this->rusuk * $this->rusuk * $this->rusuk;
    }
}

class Kelingkaran implements Prokalkulator
{
    public $jari;
    public $phi;
    public function cal()
    {
        return 2 * $this->phi * $this->jari;
    }
}

class BangunRuangFactory
{
    public function initializeBangunRuang($type,$satuan)
    {
        if ($type === 'lpersegip') {

            $data1 = new LPersegi();
            $data1 -> panjang = $satuan['panjang'] ;
            $data1 -> lebar = $satuan['lebar'] ;

            echo "Hasil panjang : " , $satuan['panjang'],"<br>";
            echo "Hasil lebar : " , $satuan['lebar'],"<br>";
            echo "Hasil volume : ";
            return $data1;
        }
        if ($type === 'vbola') {
            $data1 = new Volbola();
            $data1 -> jari = $satuan['jari'] ;
            $data1 -> phi = $satuan['phi'] ;

            echo "Hasil jari - jari : " , $satuan['jari'],"<br>";
            echo "Hasil volume : = ";
            return $data1;
        }
        if ($type === 'vkerucut') {
            $data1 = new Volkerucut();
            $data1 -> tinggi = $satuan['tinggi'] ;
            $data1 -> jari = $satuan['jari'] ;
            $data1 -> phi = $satuan['phi'] ;

            echo "Hasil jari- jari : " , $satuan['jari'],"<br>";
            echo "Hasil tinggi : " , $satuan['tinggi'],"<br>";
            echo "Hasil volume : ";
            return $data1;
        }
        if ($type === 'vkubus') {
            $data1 = new Volkubus();
            $data1 -> rusuk = $satuan['rusuk'] ;

            echo "Hasil rusuk : " , $satuan['rusuk'],"<br>";
            echo "Hasil volume : ";
            return $data1;
        }
        if ($type === 'klingkaran') {
            $data1 = new Kelingkaran();
            $data1 -> jari = $satuan['jari'] ;
            $data1 -> phi = $satuan['phi'] ;

            echo "Hasil jari - jari: " , $satuan['jari'],"<br>";
            echo "Hasil volume : ";
            return $data1;
        }

        throw new Exception("ERROR!! Incorrected input!");
    }
}


$type = ['rusuk' => 18, 'panjang'=> 26, 'lebar'=> 30, 'jari'=> 19, 'tinggi' => 50, 'phi' => 22/7];

$pilihan = 'vkubus';
$bangunRuangFactory = new BangunRuangFactory();
$bangunRuang = $bangunRuangFactory->initializeBangunRuang($pilihan,$type);
print_r($bangunRuang->cal());

?>