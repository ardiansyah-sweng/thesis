<?php

interface Kalkulator
{
    public function cal();
}

class Luas_Persegi implements Kalkulator
{
    public $panjang;
    public $lebar;
    public function cal()
    {
        return $this->panjang * $this->lebar;
    }
}

class Volume_Bola implements Kalkulator
{
    public $jari;
    public $phi;
    public function cal()
    {
        return (4/3) * $this->phi * $this->jari * $this->jari;
    }
}

class Volume_kerucut implements Kalkulator
{
    public $tinggi;
    public $jari;
    public $phi;
    public function cal()
    {
        return (1/3) * $this->phi * $this->jari * $this->jari * $this->jari * $this->tinggi;
    }
}

class Volume_kubus implements Kalkulator
{
    public $rusuk;
    public function cal()
    {
        return     $this->rusuk * $this->rusuk * $this->rusuk;
    }
}

class Keliling_lingkaran implements Kalkulator
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

            $data1 = new Luas_Persegi();
            $data1 -> panjang = $satuan['panjang'] ;
            $data1 -> lebar = $satuan['lebar'] ;

            echo "panjang = " , $satuan['panjang'],"<br>";
            echo "lebar = " , $satuan['lebar'],"<br>";
            echo "Hasil volume = ";
            return $data1;
        }
        if ($type === 'vbola') {
            $data1 = new Volume_Bola();
            $data1 -> jari = $satuan['jari'] ;
            $data1 -> phi = $satuan['phi'] ;

            echo "Jari jari = " , $satuan['jari'],"<br>";
            echo "Hasil volume = ";
            return $data1;
        }
        if ($type === 'vkerucut') {
            $data1 = new Volume_kerucut();
            $data1 -> tinggi = $satuan['tinggi'] ;
            $data1 -> jari = $satuan['jari'] ;
            $data1 -> phi = $satuan['phi'] ;

            echo "Jari jari = " , $satuan['jari'],"<br>";
            echo "tinggi = " , $satuan['tinggi'],"<br>";
            echo "Hasil volume = ";
            return $data1;
        }
        if ($type === 'vkubus') {
            $data1 = new Volume_kubus();
            $data1 -> rusuk = $satuan['rusuk'] ;

            echo "Rusuk = " , $satuan['rusuk'],"<br>";
            echo "Hasil volume = ";
            return $data1;
        }
        if ($type === 'klingkaran') {
            $data1 = new Keliling_lingkaran();
            $data1 -> jari = $satuan['jari'] ;
            $data1 -> phi = $satuan['phi'] ;

            echo "Jari jari = " , $satuan['jari'],"<br>";
            echo "Hasil volume = ";
            return $data1;
        }

        throw new Exception("Coba lagi gais");
    }
}


$type = ['rusuk' => 12, 'panjang'=>20, 'lebar'=>30, 'jari'=>10, 'tinggi' => 12, 'phi' => 22/7];

$pilihan = 'vkubus';
$bangunRuangFactory = new BangunRuangFactory();
$bangunRuang = $bangunRuangFactory->initializeBangunRuang($pilihan,$type);
print_r($bangunRuang->cal());

?>