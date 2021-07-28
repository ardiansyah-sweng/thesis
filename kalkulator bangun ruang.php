'<?php

interface Kalkulator
{
    public function cal();
}

class Lpersegipanjang implements Kalkulator
{
    public $panjang;
    public $lebar;

    public function kal()
    {
        return $this->panjang * $this->lebar;
    }
}

class Vbola implements Kalkulator
{
    public $jari;
    public $phi = 3.14;
    public function cal()
    {
        return (4/3) * $this->phi * $this->jari * $this->jari;
    }
}

class Vkerucut implements Kalkulator
{
    public $tinggi;
    public $jari;
    public $phi = 13.4;

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
    public $phi = 13.4;

    public function cal()
    {
        return 2 * $this->phi * $this->jari;
    }
}

class kalkulatorBangunRuangFactory
{
    public function hitung($tipe)
    {
    if($tipe==='luaspersegipanjang')
    {
        return Lpersegipanjang();
    }
    if($tipe==='volumebola')
    {
        return Vbola();
    }
    if($tipe==='volumekerucut')
    {
        return Vkerucut(); 
    }
    if($tipe==='volumekubus')
    {
        return Vkubus();
    }
    if($tipe==='kelilinglingkaran')
    {
        return Klingkaran();
    }
    throw new Exception("Coba lagi");
    }
}

$satuan = ['rusuk'=>12, 'tinggi'=>0, 'panjang'=>0, 'lebar'=>0, 'jari'=>0];$kalkulatorBangunRuang ->hitungBangunRuang();
print_r($hasilKalkulatorBangunRuang);
