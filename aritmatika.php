<?php
class aritmatika
{
    function penjumlahan($a, $b)
    {
        return $a+$b;
    }

    function pengurangan ($a, $b)
    {
        return $a-$b;
    }

    function perkalian ($a, $b)
    {
        return $a*$b;
    }

    function pembagian ($a, $b)
    {
        return $a/$b;
    }
}

$aritmatika = new aritmatika();
echo 'Penjumlahan : ' . $aritmatika -> penjumlahan(5,3);
echo '<br>';
echo 'Pengurangan : ' . $aritmatika -> pengurangan(5,3);
echo '<br>';
echo 'Perkalian : ' . $aritmatika -> perkalian(5,3);
echo '<br>';
echo 'Pembagian : ' . $aritmatika -> pembagian(5,3);
echo '<br>';