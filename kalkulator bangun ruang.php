<?php

interface Formula
{
    public function hitungBangunRuang();
}

class LuasPersegiPanjang implements Formula
{
    public $panjang = 0;
    public $lebar = 0;
    public function hitungBangunRuang()
    {
        return ['Bangun Ruang : ' => 'Luas Persegi Panjang',
               'Panjang : ' => $this->panjang,
               'Lebar : ' => $this->lebar,
               'Luas Persegi Panjang : ' => ($this->panjang * $this->lebar)
        ];
    }
}

class VolumeBola implements Formula
{
    public $jari2 = 0;
    public $phi = 3.14;
    public $empatpertiga = 4/3;
    public function hitungBangunRuang()
    {
        return ['Bangun Ruang : ' => 'Volume Bola',
            'Panjang Jari-jari : ' => $this->jari2,
            'Volume Bola : ' => ($this->empatpertiga * $this->phi * pow($this->jari2,3))
        ];
    }
}

class VolumeKerucut implements Formula
{
    public $jari2 = 0;
    public $phi = 3.14;
    public $sepertiga = 1/3;
    public function hitungBangunRuang()
    {
        return ['Bangun Ruang : ' => 'Volume Kerucut',
            'Panjang Jari-jari: ' => $this->jari2,
            'Tinggi : ' => $this->jari2,
            'Volume Kerucut : ' => ($this->sepertiga * $this->phi * pow($this->jari2,3))
        ];
    }
}

class VolumeKubus implements Formula
{
    public $rusuk = 12;
    public function hitungBangunRuang()
    {
        return ['Bangun Ruang : ' => 'Volume Kubus',
            'Panjang Rusuk: ' => $this->rusuk,
            'Volume Kubus : ' => (pow($this->rusuk,3))
        ];
    }
}

class KelilingLingkaran implements Formula
{
    public $jari2 = 0;
    public $phi = 3.14;
    public $dua = 2;
    public function hitungBangunRuang()
    {
        return ['Bangun Ruang : ' => 'Keliling Lingkaran',
            'Panjang Jari-jari : ' => $this->jari2,
            'Volume Bola : ' => ($this->dua * $this->phi * $this->jari2)
        ];
    }
}

class BangunRuangFactory
{
    public function initializeBangunRuang($pilihan,$satuan)
    {
        if ($pilihan === 'LuasPersegiPanjang') {
            return new LuasPersegiPanjang();
        }
        if ($pilihan === 'Volumebola') {
            return new VolumeBola();
        }
        if ($pilihan === 'Volumekerucut') {
            return new VolumeKerucut();
        }
        if ($pilihan === 'VolumeKubus') {
            return new VolumeKubus();
        }
        if ($pilihan === 'Kelilinglingkaran') {
            return new KelilingLingkaran();
        }

        throw new Exception("not found");
    }
}

$satuan = ['rusuk' => 12, 'panjang'=>0, 'lebar'=>0, 'jari2'=>0];
$pilihan = 'VolumeKubus';
$bangunRuangFactory = new BangunRuangFactory();
$bangunRuang = $bangunRuangFactory->initializeBangunRuang($pilihan,$satuan);
$cetak = $bangunRuang->hitungBangunRuang();
print_r($cetak);