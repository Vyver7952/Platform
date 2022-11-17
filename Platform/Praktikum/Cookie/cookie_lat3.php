<html>
    <head>
        <title>Hitung Kunjungan</title>
        <!-- Memberi nama tab webside dengan nama 'Hitung Kunjungan' -->
    </head>
    <body>
        <?php
            if(isset($_COOKIE['counter'])){ // Mengecek apakah 'counter' sudah memiliki nilai atau belum
                $c = $_COOKIE['counter'];
                // Menyimpan value cookie 'counter' ke dalam variable c
                $c = $c + 1;
                // Menambahkan variable c dengan 1
                setcookie("counter",$c);
                // Membuat sebuah cookie dengan nama 'counter' dan memiliki value yaitu variable c
                echo "<h1>Anda sudah mengunjungi halaman ini sebanyak ".$c." kali</h1>";
                // PHP memanipulasi HTML untuk membuat header dengan judul 'Anda sudah mengunjungi halaman ini sebanyak 'variable c' kali'
            } else {
                echo "<h1>Anda sudah mengunjungi halaman ini sebanyak 1 kali</h1>";
                // PHP memanipulasi HTML untuk membuat header dengan judul 'Anda sudah mengunjungi halaman ini sebanyak 1 kali'
                setcookie("counter", "0");
                // Membuat sebuah cookie dengan nama 'counter' dan memiliki value yaitu '0'
            }
        ?>
    </body>
</html>