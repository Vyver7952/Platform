<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "platformdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection Failed: " . $conn->connect_error);
}

$sql = "INSERT INTO mahasiswa(nim, nama) VALUES ('205314127', 'ANDREW LIE')";

if($conn->query($sql) === TRUE){
    echo "New record created successfully";
} else {
    echo "Error: ". $sql . "<br>". $conn->error;
}

$conn->close();
?>