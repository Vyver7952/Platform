<!DOCTYPE html>
<?php
$noInduk = $_POST['noInduk'];
$nama = $_POST['nama'];
$status = $_POST['status'];
$minat = $_POST['minat'];

setcookie('cookie1', serialize([$noInduk, $nama, $status, $minat]));
?>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pendaftaran Peserta Seminar</title>
</head>

<body>
  <h1>PENDAFTARAN BERHASIL</h1>
</body>

</html>