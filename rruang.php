<?php

interface Kalkulator
{
    public function cal();
}

class Lpersegipanjang implements Kalkulator
{
    public $panjang;
    public $lebar;
    public function cal()
    {
        return $this->panjang * $this->lebar;
    }
}

class Vbola implements Kalkulator
{
    public $jari;
    public $phi;
    public function cal()
    {
        return (4/3) * $this->phi * $this->jari * $this->jari;
    }
}

class Vkerucut implements Kalkulator
{
    public $tinggi;
    public $jari;
    public $phi;
    public function cal()
    {
        return (1/3) * $this->phi * $this->jari * $this->jari * $this->jari * $this->tinggi;
    }
}

class Vkubus implements Kalkulator
{
    public $rusuk;
    public function cal()
    {
        return $this->rusuk * $this->rusuk * $this->rusuk; 
    }
}

class Klingkaran implements Kalkulator
{
    public $jari;
    public $phi;
    public function cal()
    {
        return 2 * $this->phi * $this->jari;
    }
}

class kalkulatorBangunRuangFactory
{
    public function hitung($tipe, $satuan)
    {
    if($tipe==='luaspersegipanjang')
    {
        $data1 = new LPersegi();
        $data1 -> panjang = $satuan['panjang'] ;
        $data1 -> lebar = $satuan['lebar'] ;

        echo "panjangnya adalah : " , $satuan['panjang'],"<br>";
        echo "lebarnya adalah : " , $satuan['lebar'],"<br>";
        echo "Hasil volumenya adalah : ";
        return $data1;
    }
    if($tipe==='volumebola')
    {
        $data2 = new Vbola();
        $data2 -> jari = $satuan['jari'] ;
        $data2 -> phi = $satuan['phi'] ;

        echo "Jari - jarinya adalah : " , $satuan['jari'],"<br>";
        echo "Hasil volumenya adalah : = ";
        return $data2;
    }
    if($tipe==='volumekerucut')
    {
        $data3 = new Vkerucut();
        $data3 -> tinggi = $satuan['tinggi'] ;
        $data3 -> jari = $satuan['jari'] ;
        $data3 -> phi = $satuan['phi'] ;

        echo "Jari- jarinya adalah : " , $satuan['jari'],"<br>";
        echo "tingginya adalah : " , $satuan['tinggi'],"<br>";
        echo "Hasil volumenya adalah : ";
        return $data3;
    }
    if($tipe==='volumekubus')
    {
        $data4 = new Vkubus();
        $data4 -> rusuk = $satuan['rusuk'] ;

        echo "Rusuknya adalah : " , $satuan['rusuk'],"<br>";
        echo "Hasil volumenya adalah : ";
        return $data4;
    }
    if($tipe==='kelilinglingkaran')
    {
        $data1 = new Klingkaran();
            $data5 -> jari = $satuan['jari'] ;
            $data5 -> phi = $satuan['phi'] ;

            echo "Jari - jarinya adalah : " , $satuan['jari'],"<br>";
            echo "Hasil volumenya adalah : ";
            return $data5;
    }
    throw new Exception("Coba lagi");
    }
}

$satuan = ['rusuk'=>2, 'tinggi'=>50, 'panjang'=>13, 'lebar'=>20, 'jari'=>10, 'phi'=>22/7];
$Kalkulator = 'volumekubus';
$kalkulatorBangunRuangFactory = new kalkulatorBangunRuangFactory();
$kalkulatorBangunRuang = $kalkulatorBangunRuangFactory ->hitung($Kalkulator, $satuan);

print_r($kalkulatorBangunRuang->cal());
