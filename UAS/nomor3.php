<?php
    interface kalkulator_bangun_ruang
    {
        public function hitung();
    }

    class LuasPersegiPanjang implements kalkulator_bangun_ruang
    {
        public $panjang = 0;
        public $lebar = 0;
        
        public function hitung()
        {
            return [
                'Bangun Ruang :' => 'Luas Persegi Panjang',
                'Panjang :' => $this->panjang,
                'Lebar :' => $this->lebar,
                'Luas Persegi Panjang :' => ($this->panjang * $this->lebar)
            ];
        }
    }

    class KelilingLingkaran implements kalkulator_bangun_ruang
    {
        Public $dua = 2;
        public $jari = 12;
        public $phi = 3.14;
    
        public function hitung()
        {
            return [
                'Bangun Ruang :' => 'Keliling Lingkaran',
                'Panjang Jari-jari :' => $this->jari,
                'Keliling Lingkaran :' => ($this->phi * $this->dua * $this->jari)
            ];
        }
    }

    class VolumeBola implements kalkulator_bangun_ruang
    {
        public $jari = 0;
        public $empatpertiga = 4 / 3;
        public $phi = 3.14;
        public function hitung()
        {
            return [
                'Bangun Ruang :' => 'Volume Bola',
                'Panjang Jari-jari :' => $this->jari,
                'Volume Bola :' => ($this->empatpertiga * $this->phi * $this->jari * $this->jari * $this->jari)
            ];
        }
    }

    class VolumeKerucut implements kalkulator_bangun_ruang
    {
        public $satupertiga = 0.33;
        public $jari = 0;
        public $tinggi = 0;
        public $phi = 3.14;

        public function hitung()
        {
            return [
                'Bangun Ruang :' => 'Volume Kerucut',
                'Panjang Jari-Jari :' => $this->jari,
                'Tinggi :' => $this->tinggi,
                'Volume Kerucut :' => ($this->satupertiga * $this->phi * $this->kuadrat($this->jari) * $this->tinggi)
            ];
        }
    }

    class VolumeKubus implements kalkulator_bangun_ruang
    {
        public $rusuk = 12;
        public function hitung()
        {
            return [
                'Bangun Ruang :' => 'Volume Kubus',
                'Panjang Rusuk :' => $this->rusuk,
                'Volume Kubus :' => ($this->rusuk * $this->rusuk * $this->rusuk)
            ];
        }
    }

    class kalkulatorBangunRuangFactory
    {
        public function initializekalkulatorBangunRuang($pilihanKalkulatorBangunRuang,$Satuan)
        {
            if ($pilihanKalkulatorBangunRuang === 'LuasPersegiPanjang') {
                return new LuasPersegiPanjang($Satuan);
            }
            if ($pilihanKalkulatorBangunRuang === 'VolumeBola') {
                return new VolumeBola($Satuan);
            }
            if ($pilihanKalkulatorBangunRuang === 'VolumeKerucut') {
                return new VolumeKerucut($Satuan);
            }
            if ($pilihanKalkulatorBangunRuang === 'VolumeKubus') {
                return new VolumeKubus($Satuan);
            }
            if ($pilihanKalkulatorBangunRuang === 'KelilingLingkaran') {
                return new KelilingLingkaran($Satuan);
            }
            throw new Exception("Bangun Ruang Tidak Ditemukan");
        }
    }
    
    $Satuan = [
        'Rusuk' => 0,
        'Panjang' => 0,
        'Lebar' => 0,
        'jari' => 12
    ];

    $pilihanKalkulatorBangunRuang = 'VolumeKubus';
    $kalkulatorBangunRuangFactory = new KalkulatorBangunRuangFactory();
    $kalkulatorBangunRuang = $kalkulatorBangunRuangFactory -> initializekalkulatorBangunRuang($pilihanKalkulatorBangunRuang, $Satuan);
    $hasilKalkulatorBangunRuang = $kalkulatorBangunRuang -> hitung();
    print_r($hasilKalkulatorBangunRuang);
?>