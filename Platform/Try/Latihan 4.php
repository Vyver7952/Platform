<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>
</head>
<body>
    <?php
        $username = 'admin';
        $password = 'admin123';

        if($username == $_POST['username'] and $password == $_POST['password']){
            echo 'Selamat Datang, Anda sudah Login';
        } else {
            echo 'Mohon Maaf, Anda gagal Login';
        }
    ?>
</body>
</html>