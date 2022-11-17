<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2B</title>

    <style>
        table, th, td {
            border: 1px solid;
            text-align: left;
        }
    </style>
</head>

<body>
    <h1>FORM BIODATA - REVIEW</h1>
    <!--Membuat sebuah Header dengan tulisan 'FORM BIODATA - REVIEW'-->
    <table>
        <!--Membuat Sebuah Table-->
        <tr>
            <!--Membuat sebuah baris pertama pada Table-->
            <th>Nama</th>
            <!--Membuat sebuah table header pada Table dengan isi 'Nama'-->
            <td><?php echo $_POST["nama"] ?></td>
            <!--
                Mendapatkan nilai yang diinputkan pada form sebelumnya pada tag yang memiliki atribut name 'nama'
                dan dimasukkan pada table data
            -->
        </tr>
        <tr>
            <!--Membuat sebuah baris kedua pada Table-->
            <th>Alamat</th>
            <!--Membuat sebuah table header pada Table dengan isi 'Alamat'-->
            <td><?php echo $_POST["alamat"] ?></td>
            <!--
                Mendapatkan nilai yang diinputkan pada form sebelumnya pada tag yang memiliki atribut name 'alamat'
                dan dimasukkan pada table data
            -->
        </tr>
        <tr>
            <!--Membuat sebuah baris ketiga pada Table-->
            <th>Umur</th>
            <!--Membuat sebuah table header pada Table dengan isi 'Umur'-->
            <td><?php echo $_POST["umur"] ?></td>
            <!--
                Mendapatkan nilai yang diinputkan pada form sebelumnya pada tag yang memiliki atribut name 'umur'
                dan dimasukkan pada table data
            -->
        </tr>
        <tr>
            <!--Membuat sebuah baris keempat pada Table-->
            <th>Jenis Kelamin</th>
            <!--Membuat sebuah table header pada Table dengan isi 'Jenis Kelamin'-->
            <td><?php echo $_POST["gender"] ?></td>
            <!--
                Mendapatkan nilai yang dipilih pada form sebelumnya pada tag yang memiliki atribut name 'gender'
                dan dimasukkan pada table data
            -->
        </tr>
        <tr>
            <!--Membuat sebuah baris kelima pada Table-->
            <th>Hobby</th>
            <!--Membuat sebuah table header pada Table dengan isi 'Hobby'-->
            <td>
                <?php
                $name = $_POST['hobby'];
                // Mendapatkan nilai yang dipilih pada form sebelumnya pada tag yang memiliki atribut name 'hobby'
                // dan disimpan dalam atribut name
                '<ul>'; // Membuat tag pembuka ul atau unordered list
                foreach ($name as $hobby) { // Perulangan foreach dengan panjang data yang didapatkan dari atribut nama
                    // dan tiap data disimpan dalam atribut hobby
                    echo '<li>' . $hobby . "</li>"; // Membuat list dari atribut hobby
                }
                '</ul>'; // Membuat tag penutup ul atau unordered list
                ?>
            </td>
        </tr>
    </table>
</body>

</html>