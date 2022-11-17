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

// Membuat variable yang digunakan untuk menyimpan data dari form (inputjadwal.php)
$kode = $_POST['kodematakuliah'];
$matkul = $_POST['matakuliah'];
$kelas = $_POST['kelas'];
$pengampu = $_POST['pengampu'];
$hari = $_POST['hari'];
$jammulai = $_POST['jammulai'];
$jamselesai = $_POST['jamselesai'];

if (isset($_POST['simpan-btn'])) {
    $sql = "INSERT INTO jadwal (kode_Matakuliah, matakuliah, kelas, pengampu, hari, jam) 
    VALUES ('$kode', '$matkul','$kelas', '$pengampu ', '$hari', '$jammulai - $jamselesai')";
    // Query yang digunakan untuk menginputkan data ke dalam table 'jadwal' dengan cara memanggil semua nama kolom
    // dan setiap kolom akan diisikan dengan nilai yang didapatkan dari form sebelumnya yang telah disimpan
    // ke dalam variable
} elseif(isset($_POST['update-btn'])){
    $sql = "UPDATE jadwal
    SET matakuliah='$matkul', kelas='$kelas', pengampu='$pengampu', hari='$hari', jam='$jammulai - $jamselesai'
    WHERE kode_Matakuliah='$kode'";
    // Query yang digunakan untuk mengupdate data yang ada di table 'jadwal' dengan mencari data berdasarkan Primary Key
    // (kode_Matakuliah) dan mengganti semua datanya dengan nilai yang didapatkan dari form sebelumnya yang telah disimpan ke dalam variable
}

if ($conn->query($sql) === FALSE) { // Ditampilkan jika query mengalami error
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); // Menutup koneksi ke database

header('location:inputjadwal.php'); // Mengembalikan user ke halaman 'inputjadwal.php'