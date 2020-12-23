<?php

class Latihan {
    
    //Buat diskon di atas harga 50000
    private $DISKON = 50000;
    
    //Filtering dan mapping
    function filterstrukyanglayakdapatdiskon($arrBelanjaan){
        $filter = array_filter($arrBelanjaan, array($this, "strukDiskon"));
        $mapping = array_map(array($this, "addDiskon"), $filter);
        return $mapping;
    }
    
    //lakukan operasi diskon 10%
    protected function addDiskon($arrBelanjaan){
        $value = $arrBelanjaan['jumlahBelanja'] / 10;
        $arrBelanjaan = $arrBelanjaan + array('diskon' => $value);
        return $arrBelanjaan;
    }
    
    //Lakukan operasi filtering
    protected function strukDiskon($arrBelanjaan){
        if($arrBelanjaan['jumlahBelanja'] > $this->DISKON){
            return $arrBelanjaan;
        }
    }
}

//Isi array
$arrBelanjaan = array(
    array('nomorStruk' => 1, 'jumlahBelanja' => 77400),
    array('nomorStruk' => 2, 'jumlahBelanja' => 19000),
    array('nomorStruk' => 3, 'jumlahBelanja' => 49890),
    array('nomorStruk' => 4, 'jumlahBelanja' => 109000),
    array('nomorStruk' => 5, 'jumlahBelanja' => 56000),
);

//Deklarasi nya
$coba = new Latihan;

//Lakukan operasinya
print_r($coba->filterstrukyanglayakdapatdiskon($arrBelanjaan));

?>