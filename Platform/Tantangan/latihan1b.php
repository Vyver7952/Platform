<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1B</title>
</head>

<body>
    <h1>STATUS KELULUSAN MAHASISWA</h1>
    <!--Membuat sebuah Header dengan tulisan 'STATUS KELULUSAN MAHASISWA'-->
    <p>
        Mahasiswa dengan Nama <?php echo $_POST["nama"]; ?> 
        <!--
            Mendapatkan nilai yang diinputkan pada form sebelumnya pada tag yang memiliki atribut name 'nama'
            dan dimasukkan pada paragraf
        -->
        NIM <?php echo $_POST["nim"]; ?>
        <!--
            Mendapatkan nilai yang diinputkan pada form sebelumnya pada tag yang memiliki atribut name 'nim'
            dan dimasukkan pada paragraf
        -->
        berhasil menyelesaikan studi S1 dengan predikat <?php echo $_POST["status"]; ?>
        <!--
            Mendapatkan nilai yang diinputkan pada form sebelumnya pada tag yang memiliki atribut name 'status'
            dan dimasukkan pada paragraf
        -->
    </p>
</body>

</html>