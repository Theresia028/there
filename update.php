<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama_mhs'];
$nim = $_POST['nim_mhs'];
$alamat = $_POST['alamat_mhs'];

$sql = "UPDATE tbl_028 set nama_mhs = '$nama', nim_mhs = '$nim', alamat_mhs = '$alamat' where id_mhs = $id";
$hasil =mysqli_query($koneksi, $sql); 
if (!$hasil){
    echo "Eksekusi update data Mahasiswa Gagal";
}else{
    echo "Eksekusi update data Mahasiswa Berhasil<br>";
    echo "<a href='data_mhs.php'>Show data</a>";
}

?>