<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<h1>TABEL DATA MAHASISWA </h1>
<table width="90%" border=1" collspacing="1">
    <tr bgcolor='#A52A2A' align='center'>
        <td><b>ID MHS</b></td> 
        <td><b>Nama Mahasiswa</b></td> 
        <td><b>NIM Mahasiswa</b></td> 
        <td><b>Alamat Mahasiswa</b></td> 
        <td><b>Action</b></td> 
    </tr>
        <?php
        include "koneksi.php";
        $sql="SELECT * FROM tbl_028";
        $hasil = mysqli_query($koneksi, $sql);
        while($row = mysqli_fetch_array($hasil))
        {
        ?>
        <tr bgcolor='#EE6868' align='center'>
            <td><?=$row['id_mhs'];?></td>
            <td><?=$row['nama_mhs'];?></td>
            <td><?=$row['nim_mhs'];?></td>
            <td><?=$row['alamat_mhs'];?></td>
            <td> 
                <a href ="form_edit.php?id=<?=$row['id_mhs']?>">Edit
                <a href ="delete.php?id=<?=$row['id_mhs']?>">Delete
            </td>
                      
        </tr>
        <?php }
        ?>
              <a href="index.php">Back Home</a>
</table>
</body>
</html> 
