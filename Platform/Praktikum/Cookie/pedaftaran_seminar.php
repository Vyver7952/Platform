<!DOCTYPE html>
<?php
if (isset($_COOKIE['cookie1'])) {
    $kuki = unserialize($_COOKIE['cookie1']);
    echo "<h1>ANDA SUDAH TERDAFTAR SEBAGAI PESERTA SEMINAR</h1>";

    echo "<table border=1px>";
    echo "<tr><td>No Induk</td><td>" . $kuki[0] . "</td></tr>";
    echo "<tr><td>Nama</td><td>" . $kuki[1] . "</td></tr>";
    echo "<tr><td>Status</td><td>" . $kuki[2] . "</td></tr>";
    echo "<tr><td>Minat</td><td>";
    foreach ($kuki[3] as $c) {
        echo '<li>' . $c;
    }
    echo "</td></tr>";
    echo "</table>";
} else {
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Peserta Seminar</title>

    <style>
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

        .container-checkbox,
        .container-radio {
            margin-left: 114px;
        }

        .submit {
            margin-left: 115px;
            width: 110px;
        }
    </style>
</head>

<body>
    <h1>PENDAFTARAN PESERTA SEMINAR</h1>

    <form action="announcement.php" method="post">
        <div>
            <label class="labeljudul" for="noInduk">No Induk</label>
            <input type="text" name="noInduk" required>
            <br>
        </div>

        <div>
            <label class="labeljudul" for="nama">Nama</label>
            <input type="text" name="nama" required>
            <br>
        </div>

        <div>
            <div>
                <label class="labeljudul" for="status">Status</label>
                <input type="radio" name="status" id="dosen" value="Dosen" required>
                <label for="dosen">Dosen</label>
            </div>
            <div class="container-radio">
                <input type="radio" name="status" id="mahasiswa" value="Mahasiswa">
                <label for="mahasiswa">Mahasiswa</label>
            </div>
        </div>

        <div>
            <div>
                <label class="labeljudul" for="minat">Minat</label>
                <input type="checkbox" name="minat[]" id="programming" value="Programming">
                <label for="programming">Programming</label>
            </div>
            <div class="container-checkbox">
                <input type="checkbox" name="minat[]" id="database" value="Database">
                <label for="database">Database</label>
            </div>
            <div class="container-checkbox">
                <input type="checkbox" name="minat[]" id="networking" value="Networking">
                <label for="networking">Networking</label>
            </div>
            <div class="container-checkbox">
                <input type="checkbox" name="minat[]" id="multimedia" value="Multimedia">
                <label for="multimedia">Multimedia</label>
            </div>
        </div>

        <input class="submit" type="submit" name="submit" value="Daftar">
    </form>
</body>

</html>
<?php
}
?>