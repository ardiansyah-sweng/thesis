<?php

use phpDocumentor\Reflection\Types\This;

interface KalkulatorBangunRuang
    {
        public function Proses();
    }

    class LuasPersegiPanjang implements KalkulatorBangunRuang
    {
        public $Panjang = 0;
        public $Lebar = 0;

        public function Proses()
        {
            return 
            [
                'Bangun Ruang           : ' => 'Luas Persegi Panjang',
                'Panjang                : ' => $this->Panjang,
                'Lebar                  : ' => $this->Lebar,
                'Luas Persegi Panjang   : ' => ($this->Panjang * $this->Lebar)
            ];
        }
    }

    class VolumeBola implements KalkulatorBangunRuang
    {
        public $JariJari = 0;
        public $Phi = 3.14;

        public function Proses()
        {
            return 
            [
                'Bangun Ruang           : ' => 'Luas Persegi Panjang',
                'Jari - Jari            : ' => $this->JariJari,
                'Phi                    : ' => $this->Phi,
                'Volume Bola            : ' => (4/3 * $this->Phi * ($this->JariJari * $this->JariJari * $this->JariJari))
            ];
        }
    }

    class VolumeKerucut implements KalkulatorBangunRuang
    {
        public $JariJari = 0;
        public $Tinggi = 0;
        public $Phi = 3.14;

        public function Proses()
        {
            return [
                'Bangun Ruang           :' => 'Volume Kerucut',
                'Jari-jari              :' => $this->JariJari,
                'Tinggi                 :' => $this->Tinggi,
                'Volume Kerucut         :' => (1/3 * $this->Phi * ($this->$this->JariJari * $this->JariJari) * $this->Tinggi)
            ];
        }
    }

    class VolumeKubus implements KalkulatorBangunRuang
    {
        public $Sisi = 0;

        public function Proses()
        {
            return [
                'Bangun Ruang           :' => 'Volume Kubus',
                'Sisi                   :' => $this->Sisi,
                'Volume Kubus           :' => ($this->Sisi * $this->Sisi * $this->Sisi)
            ];
        }
    }

    class KelilingLingkaran implements KalkulatorBangunRuang
    {
        public $JariJari = 0;
        public $Phi = 3.14;

        public function Proses()
        {
            return [
                'Bangun Ruang           :' => 'Keliling Lingkaran',
                'Jari-jari              :' => $this->JariJari,
                'Keliling Lingkaran     :' => ($this->Phi * 2 * $this->JariJari)
            ];
        }
    }

    class MenuKalkulator
    {
        public function initializeBangunRuang($Menu, $Value)
        {
            if ($Menu === 'Luas Persegi Panjang') {
                return new LuasPersegiPanjang($Value);
            }
            if ($Menu === 'Volume Bola') {
                return new VolumeBola($Value);
            }
            if ($Menu === 'Volume Kerucut') {
                return new VolumeKerucut($Value);
            }
            if ($Menu === 'Volume Kubus') {
                return new VolumeKubus($Value);
            }
            if ($Menu === 'Keliling Lingkaran') {
                return new KelilingLingkaran($Value);
            }

            throw new Exception("Bangun Ruang Tidak Ditemukan");
        }
    }

    $Value = [
        'Sisi' => 12,
        'Panjang' => 0,
        'Lebar' => 0,
        'jariJari' => 0
    ];
    $Menu = 'Volume Kubus';
    $MenuKalkulator = new MenuKalkulator();
    $kalkulatorBangunRuang = $MenuKalkulator -> initializeBangunRuang($Menu, $Value);
    $Hasil = $kalkulatorBangunRuang -> Proses();
    print_r($Hasil);
?>