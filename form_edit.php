<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Mahasiswa</title>
</head>
<body>
<?php
include 'koneksi.php';
$id=$_GET['id'];
$sql ="SELECT * FROM tbl_028 WHERE id_mhs=$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Query Salah";

}
?>

<h1>Form Tambah Mahasiswa</h1>
<?php
while ($row = mysqli_fetch_array($hasil))
{
    
?>
    <form method="post" action="update.php">
        <input type="hidden" name="id" value="<?php echo $row['id_mhs']?>">
        Nama Mahasiswa : <input type="text" name="nama_mhs" value="<?php echo $row['nama_mhs']?>"><br/>
        NIM Mahasiswa : <input type="text" name="nim_mhs" value="<?php echo $row['nim_mhs']?>"><br/>
        Alamat Mahasiswa : <input type="text" name="alamat_mhs" value="<?php echo $row['alamat_mhs']?>"><br/>
        <button type="submit">Update</button> 
    </form> 
<?php }?>
</body>
</html>

