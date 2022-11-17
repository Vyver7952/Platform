<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $baris = [3, 2, 5, 3, 7];
        $total = 0;

        echo '{ ';
        foreach ($baris as $angka) {
            echo $angka.' ';
        }
        echo '} <br>';

        foreach ($baris as $angka) {
            $total += $angka;
        }

        echo 'Rata - rata dari baris diatas adalah : '. $total/count($baris);
    ?>
</body>
</html>