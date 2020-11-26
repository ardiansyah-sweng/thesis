<?php
//echo date('Y-m-d H:i:s', $selesai);

function multi_unique($tanggal){
    $output = array_map("unserialize", array_unique(array_map("serialize", $tanggal)));
    return $output;
}

$tanggal = array(
    // array("mulai"=>"2020-11-05 07:00:00", "selesai"=>"2020-11-05 09:35:00"),
    // array("mulai"=>"2020-11-05 08:45:00", "selesai"=>"2020-11-05 10:25:00"),
    // array("mulai"=>"2020-11-05 09:35:00", "selesai"=>"2020-11-05 12:10:00"),
    // array("mulai"=>"2020-11-05 10:30:00", "selesai"=>"2020-11-05 12:10:00"),
    // array("mulai"=>"2020-11-05 10:30:00", "selesai"=>"2020-11-05 13:20:00"),
    array("mulai"=>"2020-11-05 14:15:00", "selesai"=>"2020-11-05 16:05:00"),
);

$hasil = multi_unique($tanggal);
//print_r($hasil);

foreach($tanggal as $key=>$val){
    echo $val['mulai'].' '.$val['selesai'].'<br>';
}

echo '<p>';
$MULAI = "2020-11-05 07:00:00";
$SELESAI = strtotime("2020-11-05 17:00:00");

echo strtotime(current($tanggal)['mulai']) - strtotime($MULAI); //selisih di awal jam
echo '<br>';
$awal = strtotime(current($tanggal)['mulai']) - strtotime($MULAI);
if($awal >= 7200){
    echo 'Mulai 1: '.$MULAI;
}

echo '<p>';
for($i=0; $i<=count($tanggal)-2; $i++){
    echo $tanggal[$i]['selesai'].'  '.$tanggal[$i+1]['mulai'].'<br>';
    $selisih = strtotime($tanggal[$i+1]['mulai']) - strtotime($tanggal[$i]['selesai']);
    echo 'Selisih '. $selisih.'<br>';
}
echo '<p>';
//selisih di akhir jam kerja. Jika >7200, return jam mulai dari tanggal selesai terakhir
echo $SELESAI - strtotime(end($tanggal)['selesai']); 
echo '<br>';
$akhir = $SELESAI - strtotime(end($tanggal)['selesai']);
if($akhir >= 7200){
    echo 'Mulai 2: '.end($tanggal)['selesai'];
}

//select mulai, selesai, unix_timestamp(mulai) + unix_timestamp(selesai) as total from jadwal where mulai LIKE '2020-10-28%' ORDER BY TIME_FORMAT(mulai, "%H-%i")