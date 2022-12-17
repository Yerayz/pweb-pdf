<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:Regular,Bold">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h3>PENDAFTARAN SISWA BARU</h3>
        <h3>SMK CODING</h3>
    </header>

    <nav>
        <ul>
            <li><a id="index-daftar" href="form-daftar.php">Daftar Baru</a></li>
            <li><a id="index-list" href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
    <?php endif; ?>
    </body>
</html>
