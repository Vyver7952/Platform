<!DOCTYPE html>
<html lang="en">

<!-- Author : Daniel Budi Prasetyo - 205314145 -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tampil</title>

    <style>
        body {
            font-family: "Comic Sans MS", "Comic Sans", cursive;
        }
    </style>
</head>

<body>
    <h1>Info Pelamar</h1>
    <p>
        <?php echo $_POST["nama"]; ?> dengan
        NIK <?php echo $_POST["nik"]; ?> melamar sebagai <?php echo $_POST["keahlian"]; ?>
    </p>
    <a href="halamanInput.php">kembali</a>
</body>

</html>