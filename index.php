<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Mahasiswa</title>
    <meta charset="UTF-8">
    <meta name="description" contents="Niagahoster">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <header>
        <h1 class="title">Selamat Datang di Website Data Mahasiswa </h1>
        <nav id="navigation">
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=data_mhs">Tabel Data</a></li>
                <li><a href="index.php?page=form_mhs">Tambah Data</a></li>
            </ul>
        </nav>
    </header>
    <div id="contents">
        <?php 
        if(isset($_GET['page'])){
            $page = $_GET['page'];
 
            switch ($page) {
                case 'home':
                include "home.php";
                break;
                case 'data_mhs':
                include "data_mhs.php";
                break;
                case 'form_mhs':
                include "form_mhs.php";
                break;          
            }
        }
else{
            include "home.php";
            
        }
        ?>
 
    </div>

</body>
</html>
