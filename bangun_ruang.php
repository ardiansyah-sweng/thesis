<?php

class BangunRuang
{
    private $PHI = 3.14;

    /**
     * Menghitung nilai kuadrat pangkat dua
     * pangkat = nilai^pangkat dua
     */
    function kuadrat($nilai)
    {
        $PANGKAT_DUA = 2;
        return pow($nilai, $PANGKAT_DUA);
    }

    /**
     * Menghitung Luas Lingkaran
     * Rumus: 0.25 * 3.14 * diameter kuadrat
     */
    function luasLingkaran($diameter)
    {
        $seperempat = 0.25;
        return $seperempat * $this->PHI * $this->kuadrat($diameter);
    }

    /**
     * Menghitung Keliling Lingkaran
     * Rumus: phi x 2 x r
     */
    function kelilingLingkaran($jari_jari)
    {
        $dua = 2;
        return $this->PHI * $dua * $jari_jari;
    }

    /**
     * Menghitung Luas Permukaan Kubus
     * Rumus: 6 x sisi^kuadrat
     */
    function luasPermukaanKubus($sisi)
    {
        $ENAM_SISI = 6;
        return $ENAM_SISI * $this->kuadrat($sisi);
    }

    /**
     * Menghitung Volume Kubus
     * Rumus sisi*sisi*sisi
     */
    function volumeKubus($sisi)
    {
        return $sisi * $sisi * $sisi;
    }
}

/**
     * Menghitung Luas Permukaan Tabung
     * Rumus: (2 x luas alas) + (keliling alas x tinggi ) atau (2 x phi x jariJari kuadrat) + (phi x diameter x tinggi)
     */
    function luasPermukaanTabung($jariJari, $tinggi)
    {
    	$DUA = 2;
    	$DIAMETER = $jariJari + $jariJari;
        return ($DUA * $this->PHI * $this->kuadrat($jariJari)) + ($this->PHI * $DIAMETER * $tinggi);
    }


$bangunRuang = new BangunRuang();
echo 'Luas lingkaran: ' . $bangunRuang->luasLingkaran(30);
echo '<br>';
echo 'Keliling lingkaran: ' . $bangunRuang->kelilingLingkaran(8);
echo '<br>';
echo 'Luas permukaan kubus: ' . $bangunRuang->luasPermukaanKubus(13);
echo '<br>';
echo 'Volume Kubus: ' . $bangunRuang->volumeKubus(5);
echo '<br>';
echo 'Luas Permukaan Tabung: '.$bangunRuang->luasPermukaanTabung(5, 10);
echo '<br>';