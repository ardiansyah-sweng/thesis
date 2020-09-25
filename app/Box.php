<?php
# app/Box.php

namespace App;

class Box
{
    function kuadrat($nilai)
    {
        $PANGKAT_DUA = 2;
        return pow($nilai, $PANGKAT_DUA);
    }
}