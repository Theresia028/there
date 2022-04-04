<?php
include "koneksi.php";

$nama = $_POST['nama_mhs'];
$nim = $_POST['nim_mhs'];
$alamat = $_POST['alamat_mhs'];

$sql = "INSERT INTO tbl_028 VALUES(null,'$nama','$nim','$alamat')";
$hasil =mysqli_query($koneksi, $sql); 
if (!$hasil){
    echo "Eksekusi tambah data Mahasiswa Gagal";
}else{
    echo "Eksekusi tambah data Mahasiswa Berhasil<br>";
    echo "<a href='data_mhs.php'>Show data</a>";
}

?>