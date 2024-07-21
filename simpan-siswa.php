<?php

//include koneksi database
include('koneksi.php');

//get data dari form
/* deklarasi variable, isinya mengambil dari hasil input form */
$nisn          = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat       = $_POST['alamat'];

//query insert data ke dalam database
/* Query digunakan untuk menyimpan data kedalam database */
$query = "INSERT INTO tbl_siswa (nisn, nama_lengkap, alamat) VALUES ('$nisn', '$nama_lengkap', '$alamat')";


//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
/* Kondisi dimana jika variable bernilai TRUE atau query berjalan otomatis 
kita akan diarahkan ke dalam file yang bernama index.php
 
Tapi jika sebaliknya maka akan menampilkan pesan eror "Data Gagal Disimpan" */
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>