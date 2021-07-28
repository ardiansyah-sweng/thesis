<?php

interface Calkulator
{
    public function cal();
}

class Lpersegi implements Calkulator
{
    public $panjang;
    public $lebar;
    public function cal()
    {
        return $this->panjang * $this->lebar;
    }
}

class Volbola implements Calkulator
{
    public $jari;
    public $phi;
    public function cal()
    {
        return (4/3) * $this->phi * $this->jari * $this->jari;
    }
}

class Volkerucut implements Calkulator
{
    public $tinggi;
    public $jari;
    public $phi;
    public function cal()
    {
        return (1/3) * $this->phi * $this->jari * $this->jari * $this->jari * $this->tinggi;
    }
}

class Volkubus implements Calkulator
{
    public $rusuk;
    public function cal()
    {
        return     $this->rusuk * $this->rusuk * $this->rusuk;
    }
}

class Kelingkaran implements Calkulator
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

            echo "panjangnya adalah : " , $satuan['panjang'],"<br>";
            echo "lebarnya adalah : " , $satuan['lebar'],"<br>";
            echo "Hasil volumenya adalah : ";
            return $data1;
        }
        if ($type === 'vbola') {
            $data1 = new Volbola();
            $data1 -> jari = $satuan['jari'] ;
            $data1 -> phi = $satuan['phi'] ;

            echo "Jari - jarinya adalah : " , $satuan['jari'],"<br>";
            echo "Hasil volumenya adalah : = ";
            return $data1;
        }
        if ($type === 'vkerucut') {
            $data1 = new Volkerucut();
            $data1 -> tinggi = $satuan['tinggi'] ;
            $data1 -> jari = $satuan['jari'] ;
            $data1 -> phi = $satuan['phi'] ;

            echo "Jari- jarinya adalah : " , $satuan['jari'],"<br>";
            echo "tingginya adalah : " , $satuan['tinggi'],"<br>";
            echo "Hasil volumenya adalah : ";
            return $data1;
        }
        if ($type === 'vkubus') {
            $data1 = new Volkubus();
            $data1 -> rusuk = $satuan['rusuk'] ;

            echo "Rusuknya adalah : " , $satuan['rusuk'],"<br>";
            echo "Hasil volumenya adalah : ";
            return $data1;
        }
        if ($type === 'klingkaran') {
            $data1 = new Kelingkaran();
            $data1 -> jari = $satuan['jari'] ;
            $data1 -> phi = $satuan['phi'] ;

            echo "Jari - jarinya adalah : " , $satuan['jari'],"<br>";
            echo "Hasil volumenya adalah : ";
            return $data1;
        }

        throw new Exception("Maaf, input tidak valid!");
    }
}


$type = ['rusuk' => 6, 'panjang'=>20, 'lebar'=>25, 'jari'=>15, 'tinggi' => 50, 'phi' => 22/7];

$pilihan = 'vkubus';
$bangunRuangFactory = new BangunRuangFactory();
$bangunRuang = $bangunRuangFactory->initializeBangunRuang($pilihan,$type);
print_r($bangunRuang->cal());

?> 