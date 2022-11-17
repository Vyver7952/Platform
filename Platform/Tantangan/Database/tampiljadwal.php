<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "platformdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Membuat koneksi ke database 'platformdb' dengan memasukan 'servername', 'username', dan 'password'

if ($conn->connect_error) { // Ditampilkan jika koneksi error atau gagal dibuat
    die("Connection Failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jadwal Kuliah</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Jadwal Kuliah</h1>
    <form action="tampiljadwal.php" method="post">
        <label for="hari">Lihat Jadwal Hari</label>
        <select name="hari" id="hari">
            <option value="Semua">Semua</option>
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
            <option value="Rabu">Rabu</option>
            <option value="Kamis">Kamis</option>
            <option value="Jumat">Jumat</option>
        </select>
        <input type="submit">
    </form>

    <?php
    if (isset($_POST['hari'])) { // Mengecek apakah 'select' hari memiliki nilai atau tidak
        $hari = $_POST['hari'];
        $arrayHari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'];

        echo "<h1>$hari</h1>";
        if ($hari == 'Semua') { // Dijalankan jika user memilih 'Semua'
            foreach ($arrayHari as $h) {
                echo "<h2>$h</h2>"
    ?>
                <table>
                    <tr>
                        <th class="no">No</th>
                        <th class="code">Kode Matakuliah</th>
                        <th class="matkul">Matakuliah</th>
                        <th class="kelas">Kelas</th>
                        <th class="jam">Jam Pelajaran</th>
                        <th class="dosen">Dosen Pengampu</th>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM jadwal WHERE hari='$h' ORDER BY jam";
                    // Query yang digunakan untuk menampilkan semua kolom yang ada pada table 'jadwal'
                    // dengan syarat kolom hari harus sama dengan variable 'h'
                    // dan data diurutkan berdasarkan jam
                    $result = $conn->query($sql); // Menjalanakan query
                    if ($result->num_rows > 0) {
                        $index = 1;
                        while ($row = $result->fetch_assoc()) {
                            echo
                            "<tr>
                                <form action='controltable.php' method='post'>
                                    <td>" . $index . "</td>
                                    <td>" . $row["kode_Matakuliah"] . "</td>
                                    <td>" . $row["matakuliah"] . "</td>
                                    <td>" . $row["kelas"] . "</td>
                                    <td>" . $row["jam"] . "</td>
                                    <td>" . $row["pengampu"] . "</td>
                                    <td>
                                        <input type='submit' value='Edit' name='edit-btn'>
                                        <input type='submit' value='Hapus' name='hapus-btn'>
                                    </td>
                                </form>
                            </tr>";
                            $index++;
                        }
                    } else { // Ditampilkan jika 'result' tidak memiliki data (0)
                        echo "<tr>
                                <td> --- </td>
                                <td> --- </td>
                                <td> --- </td>
                                <td> --- </td>
                                <td> --- </td>
                                <td> --- </td>
                            </tr>";
                    }
                    ?>
                </table>
                <br>
            <?php
            }
            $conn->close(); // Menutup koneksi saat semua data telah di cetak
        } else { // Dijalankan jika user memilih hari tertentu 'Senin' - 'Jumat'
            $sql = "SELECT * FROM jadwal WHERE hari='$hari' ORDER BY jam";
            // Query yang digunakan untuk menampilkan semua kolom yang ada pada table 'jadwal'
            // dengan syarat kolom hari harus sama dengan variable 'h'
            // dan data diurutkan berdasarkan jam
            ?>
            <table>
                <tr>
                    <th class="no">No</th>
                    <th class="code">Kode Matakuliah</th>
                    <th class="matlkul">Matakuliah</th>
                    <th class="kelas">Kelas</th>
                    <th class="jam">Jam Pelajaran</th>
                    <th class="dosen">Dosen Pengampu</th>
                </tr>
                <?php
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $index = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $index . "</td>
                            <td>" . $row["kode_Matakuliah"] . "</td>
                            <td>" . $row["matakuliah"] . "</td>
                            <td>" . $row["kelas"] . "</td>
                            <td>" . $row["jam"] . "</td>
                            <td>" . $row["pengampu"] . "</td>
                            </tr>";
                        $index++;
                    }
                } else { // Ditampilkan jika 'result' tidak memiliki data (0)
                    echo "<tr>
                        <td> --- </td>
                        <td> --- </td>
                        <td> --- </td>
                        <td> --- </td>
                        <td> --- </td>
                        <td> --- </td>
                        </tr>";
                }
                $conn->close(); // Menutup koneksi saat semua data telah di cetak
                ?>
            </table>
    <?php
        }
    }
    ?>
</body>

</html>