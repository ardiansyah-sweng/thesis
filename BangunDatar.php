<?php
# app/BangunRuang.php

namespace App;

class BangunRuang
{
    /**
     * Menghitung nilai pangkat dua
     * Rumus: nilai x nilai
     */
    function kuadrat($nilai)
    {
        $PANGKAT_DUA = 2;
        return pow($nilai, $PANGKAT_DUA);
    }


}