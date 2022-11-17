<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gudang";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Membuat koneksi ke database 'gudang' dengan memasukan 'servername', 'username', dan 'password'

if ($conn->connect_error) { // Ditampilkan jika koneksi error atau gagal dibuat
  die("Connection Failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Gudang</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <h1>Daftar Stok Gadget</h1>
  <table>

    <tr>
      <th><u>ID-Produk</u></th>
      <th><u>Nama</u></th>
      <th><u>Tipe</u></th>
      <th><u>Jenis</u></th>
      <th><u>Platform</u></th>
      <th><u>Harga</u></th>
      <th><u>Jumlah</u></th>
    </tr>
    <?php
    $sql = "SELECT * FROM stok_gudang";
    // Query yang digunakan untuk menampilkan semua kolom yang ada pada table 'stok_gudang○'
    $result = $conn->query($sql); // Menjalankan Query
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "
        <tr>
          <td>" . $row["produkid"] . "</td>
          <td>" . $row["merk"] . "</td>
          <td>" . $row["tipe"] . "</td>
          <td>" . $row["jenis"] . "</td>
          <td>" . $row["platform"] . "</td>
          <td>" . $row["harga"] . "</td>
          <td>" . $row["jumlah"] . "</td>
        </tr>
        ";
      }
    } else { // Ditampilkan jika 'result' tidak memiliki data (0)
      echo "0 results";
    }
    $conn->close(); // Menutup koneksi ke database
    ?>
  </table>
  <a href="form.php">Kembali</a>
</body>

</html>