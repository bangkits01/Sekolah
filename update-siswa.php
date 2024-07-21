<?php

//include koneksi database
include('koneksi.php');

//get data dari form
/* sebuah deklarasi variable yang mana isinya mengambil dari hasil input form  */
$id_siswa     = $_POST['id_siswa'];
$nisn         = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat       = $_POST['alamat'];

//query update data ke dalam database berdasarkan ID
/* Query digunakan untuk update data kedalam database dengan berdasarkan ID Siswa  */
$query = "UPDATE tbl_siswa SET nisn = '$nisn', nama_lengkap = '$nama_lengkap', alamat = '$alamat' WHERE id_siswa = '$id_siswa'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
/* Kondisi dimana jika variable bernilai TRUE atau Query berjalan 
maka otomatis kita diarahkan ke halaman index.php yang artinya edit dan update data
berhasil dilakukan  

Sebaliknya jika kondisi tidak terpenuhi atau FALSE maka akan mengeluarkan erorr Data Gagal Diupdate*/

if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>