<?php

interface KalBangunRuang {
    public function hitungBangunRuang($satuan);
}

class PersegiPanjang implements KalBangunRuang {

    public $panjang;
    public $lebar;

    public function hitungBangunRuang($satuan) {
        $this->panjang = $satuan['panjang'];
        $this->lebar = $satuan['lebar'];
        return ('Bangun Ruang : Persegi Panjang<br>'.
                'Panjang : '.$this->panjang.' m<br>'.
                'Lebar : '.$this->lebar.' m<br>'.
                'Luas Persegi Panjang : '.$this->panjang * $this->lebar.' m2');
    }
}

class Bola implements KalBangunRuang {
    public $jejari;

    public function hitungBangunRuang($satuan) {
        $this->jejari = $satuan['jejari'];
        return ('Bangun Ruang : Bola<br>'.
                'Jejari (r) : '.$this->jejari.' m<br>'.
                'Volume Bola : '.(4/3) * pi() * $this->jejari * $this->jejari * $this->jejari.' m3');
    }
}

class Kerucut implements KalBangunRuang {
    public $tinggi;
    public $jejari;

    public function hitungBangunRuang($satuan) {
        $this->tinggi = $satuan['tinggi'];
        $this->jejari = $satuan['jejari'];
        return ('Bangun Ruang : Kerucut<br>'.
                'Tinggi : '.$this->tinggi.' m<br>'.
                'Jejari (r) : '.$this->jejari.' m<br>'.
                'Volume Kerucut : '.(1/3) * pi() * $this->jejari * $this->jejari * $this->tinggi.' m3');
    }
}

class Kubus implements KalBangunRuang {
    public $rusuk;

    public function hitungBangunRuang($satuan) {
        $this->rusuk = $satuan['rusuk'];
        return ('Bangun Ruang : Kubus<br>'.
                'Panjang Rusuk (r) : '.$this->rusuk.' m<br>'.
                'Volume Kubus : '.$this->rusuk * $this->rusuk * $this->rusuk.' m3');
    }
}

class Lingkaran implements KalBangunRuang {
    public $jejari;
    public function hitungBangunRuang($satuan) {
        $this->jejari = $satuan['jejari'];
        return ('Bangun Ruang : Lingkaran<br>'.
                'Jejari (r) : '.$this->jejari.' m<br>'.
                'Keliling Lingkaran : '.(2 * pi() * $this->jejari.' m'));
    }
}

class KalkulatorBangunRuangFactory {
    public function initializeKalkulatorBangunRuang($menu) {
        if ($menu === 'luasPersegiPanjang') {
            return new PersegiPanjang();
        }
        if ($menu == 'volumeBola') {
            return new Bola();
        }
        if ($menu === 'volumeKerucut') {
            return new Kerucut();
        }
        if ($menu === 'volumeKubus') {
            return new Kubus();
        }
        if ($menu === 'kelilingLingkaran') {
            return new Lingkaran();
        }

        throw new Exception("Tidak ada pilihan tersebut!");
    }
}

$satuan = [
    'rusuk'=> 12, 
    'panjang'=> 0, 
    'lebar'=> 0, 
    'jejari'=> 0, 
    'tinggi'=>0
];


$pilihanKalkulatorBangunRuang = 'volumeKubus';
$kalkulatorBangunRuangFactory = new KalkulatorBangunRuangFactory();
$kalkulatorBangunRuang = $kalkulatorBangunRuangFactory->initializeKalkulatorBangunRuang($pilihanKalkulatorBangunRuang);
$hasilKalkulatorBangunRuang = $kalkulatorBangunRuang->hitungBangunRuang($satuan);
print_r($hasilKalkulatorBangunRuang);