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

class VolumeBola implements kalkulator_bangun_ruang
{
    public $jariJari = 0;
    public $EMPATPERTIGA = 4 / 3;
    public $PHI = 3.14;
    public function hitung()
    {
        return [
            'Bangun Ruang :' => 'Volume Bola',
            'Panjang Jari-jari :' => $this->jariJari,
            'Volume Bola :' => ($this->EMPATPERTIGA * $this->PHI * $this->jariJari * $this->jariJari * $this->jariJari)
        ];
    }
}

class VolumeKerucut implements kalkulator_bangun_ruang
{
    public $SATUPERTIGA = 0.33;
    public $jariJari = 0;
    public $tinggi = 0;
    public $PHI = 3.14;

    public function hitung()
    {
        return [
            'Bangun Ruang :' => 'Volume Kerucut',
            'Panjang Jari-jari :' => $this->jariJari,
            'Tinggi :' => $this->tinggi,
            'Volume Kerucut :' => ($this->SATUPERTIGA * $this->PHI * $this->kuadrat($this->jariJari) * $this->tinggi)
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

class KelilingLingkaran implements kalkulator_bangun_ruang
{
    Public $DUA = 2;
    public $jariJari = 0;
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
    'Rusuk' => 12,
    'Panjang' => 0,
    'Lebar' => 0,
    'jariJari' => 0
];
$pilihanKalkulatorBangunRuang = 'VolumeKubus';
$kalkulatorBangunRuangFactory = new KalkulatorBangunRuangFactory();
$kalkulatorBangunRuang = $kalkulatorBangunRuangFactory -> initializekalkulatorBangunRuang($pilihanKalkulatorBangunRuang, $Satuan);
$hasilKalkulatorBangunRuang = $kalkulatorBangunRuang -> hitung();
print_r($hasilKalkulatorBangunRuang);

?>