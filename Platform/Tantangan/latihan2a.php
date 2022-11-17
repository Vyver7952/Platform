<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2A</title>

    <style>
        div {
            margin-bottom: 10px;
        }

        label {
            display: inline-block;
            width: 110px;
            text-align: left;
        }

        input {
            padding: 5px 10px;
        }

        .container-checkbox, .container-radio{
            margin-left: 114px;
        }
    </style>
</head>

<body>
    <h1>FORM BIODATA</h1> <!--Membuat sebuah Header dengan tulisan 'FORM BIODATA'-->

    <form action="latihan2b.php" method="post">
        <!--
            Membuat form yang dimana saat user mengclick tombol submit maka akan pindah ke halaman 'latihan2b.php'
            Selain itu form tersebut juga memiliki method 'post'
        -->
        <div>
            <label for="nama">Nama</label>
            <!--Pembuatan sebuah label dengan isi 'Nama'-->
            <input type="text" name="nama">
            <!--Pembuatan sebuah input dengan tipe 'text' dan memiliki name atau nama 'nama'-->
            <br>
        </div>

        <div>
            <label for="alamat">Alamat</label>
            <!--Pembuatan sebuah label dengan isi 'Alamat'-->
            <input type="text" name="alamat">
            <!--Pembuatan sebuah input dengan tipe 'text' dan memiliki name atau nama 'alamat'-->
            <br>
        </div>

        <div>
            <label for="umur">Umur</label>
            <!--Pembuatan sebuah label dengan isi 'Umur'-->
            <input type="number" name="umur">
            <!--Pembuatan sebuah input dengan tipe 'number' dan memiliki name atau nama 'umur'-->
            <br>
        </div>

        <div>
            <div>
                <label for="gender">Jenis Kelamin</label>
                <!--Pembuatan sebuah label dengan isi 'Jenis Kelamin'-->
                <input type="radio" name="gender" id="pria" value="Pria">
                <!--Pembuatan sebuah input dengan tipe 'radio', memiliki name atau nama 'gender', id 'pria', dan value 'Pria'-->
                <label for="pria">Pria</label>
                <!--Pembuatan sebuah label dengan isi 'Pria'-->
            </div>
            <div class="container-radio">
                <input type="radio" name="gender" id="wanita" value="Wanita">
                <!--Pembuatan sebuah input dengan tipe 'radio', memiliki name atau nama 'gender', id 'wanita', dan value 'Wanita'-->
                <label for="wanita">Wanita</label>
                <!--Pembuatan sebuah label dengan isi 'Wanita'-->
            </div>
            <!--
                Name dalam input tipe radio disini akan menjadikan radio button, menjadi 1 grup dan hanya 1 yang bisa dipilih
            -->
            <br>
        </div>

        <div>
            <div>
                <label for="hobi">Hobby</label>
                <!--Pembuatan sebuah label dengan isi 'Hobby'-->
                <input type="checkbox" name="hobby[]" id="music" value="Music">
                <!--Pembuatan sebuah input dengan tipe 'checkbox', memiliki name atau nama 'hobby[]', id 'music', dan value 'Music'-->
                <label for="music">Music</label>
                <!--Pembuatan sebuah label dengan isi 'Music'-->
            </div>
            <div class="container-checkbox">
                <input type="checkbox" name="hobby[]" id="programming" value="Programming">
                <!--Pembuatan sebuah input dengan tipe 'checkbox', memiliki name atau nama 'hobby[]', id 'programming',
                dan value 'Programming'-->
                <label for="programming">Programming</label>
                <!--Pembuatan sebuah label dengan isi 'Programming'-->
            </div>
            <div class="container-checkbox">
                <input type="checkbox" name="hobby[]" id="game" value="Game">
                <!--Pembuatan sebuah input dengan tipe 'checkbox', memiliki name atau nama 'hobby[]', id 'game', dan value 'Game'-->
                <label for="game">Game</label>
                <!--Pembuatan sebuah label dengan isi 'Game'-->
            </div>
            <div class="container-checkbox">
                <input type="checkbox" name="hobby[]" id="movies" value="Movies">
                <!--Pembuatan sebuah input dengan tipe 'checkbox', memiliki name atau nama 'hobby[]', id 'movies', dan value 'Movies'-->
                <label for="movies">Movies</label>
                <!--Pembuatan sebuah label dengan isi 'Movies'-->
            </div>
            <div class="container-checkbox">
                <input type="checkbox" name="hobby[]" id="travelling" value="Travelling">
                <!--Pembuatan sebuah input dengan tipe 'checkbox', memiliki name atau nama 'hobby[]', id 'travelling',
                dan value 'Travelling'-->
                <label for="travelling">Travelling</label>
                <!--Pembuatan sebuah label dengan isi 'Travelling'-->
            </div>
            <div class="container-checkbox">
                <input type="checkbox" name="hobby[]" id="sport" value="Sport">
                <!--Pembuatan sebuah input dengan tipe 'checkbox', memiliki name atau nama 'hobby[]', id 'sport', dan value 'Sport'-->
                <label for="sport">Sport</label>
                <!--Pembuatan sebuah label dengan isi 'Sport'-->
            </div>
            <div class="container-checkbox">
                <input type="checkbox" name="hobby[]" id="organization" value="Organization">
                <!--Pembuatan sebuah input dengan tipe 'checkbox', memiliki name atau nama 'hobby[]', id 'organization',
                dan value 'Organization'-->
                <label for="organization">Organization</label>
                <!--Pembuatan sebuah label dengan isi 'Organization'-->
            </div>
            <div class="container-checkbox">
                <input type="checkbox" name="hobby[]" id="automotive" value="Automotive">
                <!--Pembuatan sebuah input dengan tipe 'checkbox', memiliki name atau nama 'hobby[]', id 'automotive',
                dan value 'Automotive'-->
                <label for="automotive">Automotive</label>
                <!--Pembuatan sebuah label dengan isi 'Automotive'-->
            </div>
            <!--
                Name dalam input tipe checkbox disini akan menjadikan checkbox menjadi 1 grup
            -->
            <br>
        </div>

        <input class="submit" type="submit" value="Submit">
        <!--Pembuatan sebuah input dengan tipe 'submit' dan memiliki value 'Submit'-->
    </form>
</body>

</html>