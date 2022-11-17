<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "platformdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection Failed: " . $conn->connect_error);
}

$sql = "SELECT nim, nama FROM mahasiswa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border = 1px><tr><th>NIM</th><th>Nama</th></tr>";
  while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["nim"] . "</td><td>" . $row["nama"] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

$conn->close();
?>