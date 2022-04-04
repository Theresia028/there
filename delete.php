<?php
include 'koneksi.php';
$id = $_GET['id'];

$sql="DELETE FROM tbl_028 WHERE id_mhs=$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Delete data Gagal";
}else{
    echo "Data mahasiswa berhasil di delete<br>";
    echo "<a href='data_mhs.php'> Show data</a>";

}
?>