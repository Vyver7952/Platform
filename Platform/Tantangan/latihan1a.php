<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1A</title>

    <style>
        div {
            margin-bottom: 10px;
        }

        label {
            display: inline-block;
            width: 110px;
            text-align: left;
        }

        input, select {
            padding: 5px 10px;
        }

        .submit{
            margin-left: 114px;
        }
    </style>
</head>

<body>
    <form action="latihan1b.php" method="post">
        <!--
            Membuat form yang dimana saat user mengclick tombol submit maka akan pindah ke halaman 'latihan1b.php'
            Selain itu form tersebut juga memiliki method 'post'
        -->
        <div>
            <label for="nim">NIM</label>
            <!--Pembuatan sebuah label dengan isi 'NIM'-->
            <input type="text" name="nim"><br>
            <!--Pembuatan sebuah input dengan tipe 'text' dan memiliki name atau nama 'nim'-->
        </div>
        <div>
            <label for="name">Nama</label>
            <!--Pembuatan sebuah label dengan isi 'Nama'-->
            <input type="text" name="nama"><br>
            <!--Pembuatan sebuah input dengan tipe 'text' dan memiliki name atau nama 'nama'-->
        </div>
        <div>
            <label for="status">Status Kelulusan</label>
            <!--Pembuatan sebuah label dengan isi 'Status Kelulusan'-->
            <select name="status" id="status">
                <!--Pembuatan sebuah drop-down list dengan name atau nama  dan id 'status'-->
                <option value="CUMLAUDE">CUMLAUDE</option>
                <!--Salah satu isi dari drop-down list yaitu 'CUMLAUDE'-->
                <option value="MEMUASKAN">MEMUASKAN</option>
                <!--Salah satu isi dari drop-down list yaitu 'MEMUASKAN'-->
                <option value="KURANG">KURANG</option>
                <!--Salah satu isi dari drop-down list yaitu 'KURANG'-->
            </select><br>
        </div>
        <input class="submit" type="submit" value="Submit Data">
        <!--Pembuatan sebuah input dengan tipe 'submit' dan memiliki value 'Submit Data'-->
    </form>
</body>

</html>