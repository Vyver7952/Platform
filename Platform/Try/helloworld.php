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
        echo 'Saya senang belajar PHP ';

        $namaDepan = 'Daniel';
        $namaBelakang = 'Prasetyo';
        $umur = 20;

        echo $namaDepan .' '. $namaBelakang .' berumur '. $umur;

        $counter = 1;
        echo '<ul>';
        while($counter<=5){
            echo '<li> Loop ke-'. $counter;
            $counter++;
        }
        echo '</ul>';

        $daftarMenu = ['gudeg', 'tongseng', 'sate'];
    ?>
</body>
</html>