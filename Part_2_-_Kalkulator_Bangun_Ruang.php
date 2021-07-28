<?php
    interface kalkulator_bangun_ruang
    {
        public function hitung();
    }

    class LuasPersegiPanjang implements kalkulator_bangun_ruang
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

    class KelilingLingkaran implements kalkulator_bangun_ruang
    {
        Public $DUA = 2;
        public $jari = 12;
        public $PHI = 3.14;
    
        public function hitung()
        {
            return [
                'Bangun Ruang :' => 'Keliling Lingkaran',
                'Panjang Jari-jari :' => $this->jari,
                'Keliling Lingkaran :' => ($this->PHI * $this->DUA * $this->jari)
            ];
        }
    }

    class VolumeBola implements kalkulator_bangun_ruang
    {
        public $jari = 0;
        public $EMPATPERTIGA = 4 / 3;
        public $PHI = 3.14;
        public function hitung()
        {
            return [
                'Bangun Ruang :' => 'Volume Bola',
                'Panjang Jari-jari :' => $this->jari,
                'Volume Bola :' => ($this->EMPATPERTIGA * $this->PHI * $this->jari * $this->jari * $this->jari)
            ];
        }
    }

    class VolumeKerucut implements kalkulator_bangun_ruang
    {
        public $SATUPERTIGA = 0.33;
        public $jari = 0;
        public $tinggi = 0;
        public $PHI = 3.14;

        public function hitung()
        {
            return [
                'Bangun Ruang :' => 'Volume Kerucut',
                'Panjang Jari-Jari :' => $this->jari,
                'Tinggi :' => $this->tinggi,
                'Volume Kerucut :' => ($this->SATUPERTIGA * $this->PHI * $this->kuadrat($this->jari) * $this->tinggi)
            ];
        }
    }

    class VolumeKubus implements kalkulator_bangun_ruang
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

    $pilihanKalkulatorBangunRuang = 'KelilingLingkaran';
    $kalkulatorBangunRuangFactory = new KalkulatorBangunRuangFactory();
    $kalkulatorBangunRuang = $kalkulatorBangunRuangFactory -> initializekalkulatorBangunRuang($pilihanKalkulatorBangunRuang, $Satuan);
    $hasilKalkulatorBangunRuang = $kalkulatorBangunRuang -> hitung();
    print_r($hasilKalkulatorBangunRuang);
?>