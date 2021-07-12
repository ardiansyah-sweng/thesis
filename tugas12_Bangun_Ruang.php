<?php

interface bangun_ruang
{
    public function hitung();
}

class LuasPersegiPanjang implements bangun_ruang
{
    public $Panjang = 0;
    public $Lebar = 0;

    public function hitung()
    {
        return [
            'Bangun Ruang :' => 'Luas Persegi Panjang',
            'Panjang :' => $this->Panjang,
            'Lebar :' => $this->Lebar,
            'Luas Persegi Panjang :' => ($this->Panjang * $this->Lebar)
        ];
    }
}

class VolumeBola implements bangun_ruang
{
    public $jariJari = 5;
    public $PHI = 3.14;
    public $seperempat = 1.33;
    public function hitung()
    {
        return [
            'Bangun Ruang :' => 'Volume Bola',
            'Panjang Jari-jari :' => $this->jariJari,
            'Volume Bola :' => ($this->seperempat * $this->PHI * $this->jariJari * $this->jariJari * $this->jariJari)
        ];
    }
}

class VolumeKerucut implements bangun_ruang
{
    public $jariJari = 0;
    public $tinggi = 0;
    public $PHI = 3.14;
    public $sepertiga = 0.33;

    public function hitung()
    {
        return [
            'Bangun Ruang :' => 'Volume Kerucut',
            'Panjang Jari-jari :' => $this->jariJari,
            'Tinggi :' => $this->tinggi,
            'Volume Kerucut :' => ($this->sepertiga * $this->PHI * $this->kuadrat($this->jariJari) * $this->tinggi)
        ];
    }
}

class VolumeKubus implements bangun_ruang
{
    public $Rusuk = 12;

    public function hitung()
    {
        return [
            'Bangun Ruang :' => 'Volume Kubus',
            'Panjang Rusuk :' => $this->Rusuk,
            'Volume Kubus :' => ($this->Rusuk * $this->Rusuk * $this->Rusuk)
        ];
    }
}

class KelilingLingkaran implements bangun_ruang
{
    public $DUA = 2;
    public $jariJari = 5;
    public $PHI = 3.14;

    public function hitung()
    {
        return [
            'Bangun Ruang :' => 'Keliling Lingkaran',
            'Panjang Jari-jari :' => $this->jariJari,
            'Keliling Lingkaran :' => ($this->PHI * $this->DUA * $this->jariJari)
        ];
    }
}

class kalkulatorBangunRuangFactory
{
    public function initializekalkulatorBangunRuang($pilihKalkulatorBangunRuang, $Satuan)
    {
        if ($pilihKalkulatorBangunRuang === 'LuasPersegiPanjang') {
            return new LuasPersegiPanjang($Satuan);
        }
        if ($pilihKalkulatorBangunRuang === 'VolumeBola') {
            return new VolumeBola($Satuan);
        }
        if ($pilihKalkulatorBangunRuang === 'VolumeKerucut') {
            return new VolumeKerucut($Satuan);
        }
        if ($pilihKalkulatorBangunRuang === 'VolumeKubus') {
            return new VolumeKubus($Satuan);
        }
        if ($pilihKalkulatorBangunRuang === 'KelilingLingkaran') {
            return new KelilingLingkaran($Satuan);
        }

        throw new Exception("Bangun Ruang Tidak Ditemukan");
    }
}

$Satuan = [
    'Rusuk' => 12,
    'Panjang' => 0,
    'Lebar' => 0,
    'jariJari' => 5
];
$pilihKalkulatorBangunRuang = 'VolumeKubus';
$pilihKalkulatorBangunRuang = 'KelilingLingkaran';
$kalkulatorBangunRuangFactory = new KalkulatorBangunRuangFactory();
$kalkulatorBangunRuang = $kalkulatorBangunRuangFactory->initializekalkulatorBangunRuang($pilihKalkulatorBangunRuang, $Satuan);
$hasilKalkulatorBangunRuang = $kalkulatorBangunRuang->hitung();
print_r($hasilKalkulatorBangunRuang);
