<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
    <?php
        $ipk = $_POST['ipk'];

        echo 'IPK Anda : '.$ipk.'<br>';
        echo 'Predikat Anda : ';
        if($ipk < 2.76){
            echo 'Tidak Mendapat Predikat';
        } elseif (2.76 <= $ipk and $ipk <= 3.00){
            echo 'Memuaskan';
        } elseif (3.00 < $ipk and $ipk <= 3.50){
            echo 'Sangat Memuaskan';
        } else {
            echo 'Dengan Pujian';
        }
    ?>
</body>
</html>