<!DOCTYPE html>
<html lang="en">

<!-- Author : Daniel Budi Prasetyo - 205314145 -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Input</title>

    <style>
        body {
            font-family: "Comic Sans MS", "Comic Sans", cursive;
        }

        div {
            margin-bottom: 10px;
        }

        label {
            display: inline-block;
            width: 200px;
            text-align: left;
        }

        .labeljudul {
            width: 110px;
        }

        input {
            padding: 5px 10px;
        }

        .container-radio {
            margin-left: 115px;
        }

        .submit {
            font-family: "Comic Sans MS", "Comic Sans", cursive;
            margin-left: 115px;
            width: 110px;
        }
    </style>
</head>

<body>
    <h1>Melamar Pekerjaan</h1>

    <form action="halamanTampil.php" method="post">
        <div>
            <label class="labeljudul" for="nik">NIK</label>
            <input type="text" name="nik">
            <br>
        </div>

        <div>
            <label class="labeljudul" for="nama">Nama</label>
            <input type="text" name="nama">
            <br>
        </div>

        <div>
            <div>
                <label class="labeljudul" for="keahlian">Keahlian</label>
                <input type="radio" name="keahlian" id="networkadministrator" value="Network Administrator">
                <label for="networkadministrator">Network Administrator</label>
            </div>
            <div class="container-radio">
                <input type="radio" name="keahlian" id="phpprogrammer" value="PHP Programmer">
                <label for="phpprogrammer">PHP Programmer</label>
            </div>
            <div class="container-radio">
                <input type="radio" name="keahlian" id="databaseadministrator" value="Database Administrator">
                <label for="databaseadministrator">Database Administrator</label>
            </div>
            <div class="container-radio">
                <input type="radio" name="keahlian" id="itsupport" value="IT Support">
                <label for="itsupport">IT Support</label>
            </div>
            <br>
        </div>

        <input class="submit" type="submit" value="Kirim">
    </form>
</body>

</html>