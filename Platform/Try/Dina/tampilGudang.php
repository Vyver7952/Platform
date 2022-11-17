<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "gudang";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Gudang Gadget</title>
    <style>
      table {
        border: 1px solid black;
        text-align: left;
      }
      th {
        width: 150px;
      }
    </style>
  </head>
  <body>
    <h1>Daftar Stok Gadget</h1>
    <table>
      <tr>
        <th>ID-Produk</th>
        <th>Nama</th>
        <th>Tipe</th>
        <th>Jenis</th>
        <th>Platform</th>
        <th>Harga</th>
        <th>Jumlah</th>
      </tr>
      <?php
        $sql = "SELECT * FROM stok_gudang";
        $result = $conn->query($sql);
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
        } else {
          echo "KOSONG";
        }
        $conn->close();
      ?>
    </table>
    <a href="inputGudang.php">Kembali</a>
  </body>
</html>