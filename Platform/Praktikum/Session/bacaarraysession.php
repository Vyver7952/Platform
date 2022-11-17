<?php
    session_start();
    // Memulai Session
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Membaca Array dari dalam Session</title>
        <!-- Memberi nama tab webside dengan nama 'Membaca Array dari dalam Session' -->
    </head>

    <body>
        <?php
        if(isset($_SESSION['listbuah'])){ // Mengecek apakah session 'listbuah' sudah memiliki nilai atau belum
            $daftarBuah = $_SESSION['listbuah'];
            // Membuat variable yang digunekan untuk menyimpan nilai dari session 'listbuah'

            echo "<h1>Daftar Buah</h1>";
            // PHP memanipulasi HTML untuk membuat header dengan judul 'Daftar Buah'
            echo "<ol>";
            // PHP memanipulasi HTML untuk membuat ordered list
            foreach($daftarBuah as $buah){
                echo "<li>$buah</li>";
                // PHP memanipulasi HTML untuk membuat isi dari ordered list, dengan isi yang didapat dari array
                // $daftarBuah yang disimpan di dalam Session
            }
            echo "</ol>";
            // PHP memanipulasi HTML untuk membuat ordered list
            
        }
        ?>
    </body>
</html>