<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "platformdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection Failed: " . $conn->connect_error);
}

// query
$sql = "INSERT INTO mahasiswa(nim, nama)
        VALUES ('205314134', 'ANGEL KATARINA SINURAT'),
                ('205314135', 'INGRIDA SURYANI LUNDAM')";
// multi_query
// $sql = "INSERT INTO mahasiswa(nim, nama) VALUES ('205314128', 'F LUCKY GEMMA PUTRA SHAKTI');";
// $sql .= "INSERT INTO mahasiswa(nim, nama) VALUES ('205314139', 'ANASTASIA INTAN ADELIA PURNANINGTIAS')";


if($conn->query($sql) === TRUE){
// if($conn->multi_query($sql) === TRUE){
    echo "New record created successfully";
} else {
    echo "Error: ". $sql . "<br>". $conn->error;
}

$conn->close();
?>