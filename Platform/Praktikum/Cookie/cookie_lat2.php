<html>
    <head>
        <title>Membuat Cookie</title>
        <!-- Memberi nama tab webside dengan nama 'Membuat Cookie' -->
    </head>
    <body>
        <?php
            if(isset($_COOKIE['cookie2'])){ // Mengecek apakah 'cookie2' sudah memiliki nilai atau belum
                echo "<h1>Cookie ditemukan. Nilai Cookie adalah ".$_COOKIE['cookie2']."</h1>";
                // PHP memanipulasi HTML untuk membuat header dengan judul 'Cookie ditemukan. Nilai Cookie adalah [nilai/value dari cookie2]'
            }else{
                echo "<h1>Maaf, Cookie tidak ditemukan</h1>";
                // PHP memanipulasi HTML untuk membuat header dengan judul 'Maaf, Cookie tidak ditemukan'
            }
        ?>
    </body>
</html>