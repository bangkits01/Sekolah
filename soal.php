<?php
function kabar($kawan = 'Budi'){

    echo 'Hai apakabar'.$kawan.'?';
}
kabar('Ahmad');

$nama = "Budi";
$nilai = '90';

$keterangan = ($nilai  && is_int($nilai)) ? "Lulus " : "Gagal" ;
echo $keterangan
?>