<?php
    session_start();
    // Memulai Session
?>

<!DOCTYPE html>
<html>

<head>
    <title>Menyimpan Array ke dalam Session</title>
    <!-- Memberi nama tab webside dengan nama 'Membaca Nilai Session' -->
</head>

<body>
    <?php
        $daftarBuah = array("Apel", "Jeruk", "Semangka", "Jambu", "Mangga", "Durian");
        // Membuat Array dengan nama 'daftarBuah' dengan isi "Apel", "Jeruk", "Semangka", "Jambu", "Mangga", "Durian"

        $_SESSION['listbuah'] = $daftarBuah;
        // Membuat sebuah session dengan nama 'listbuah' dan memiliki value array 'daftarBuah'
        echo "<h1>Daftar Buah sudah disimpan ke dalam Session</h1>";
        // PHP memanipulasi HTML untuk membuat header dengan judul 'Daftar Buah sudah disimpan ke dalam Session'
        ?>
</body>

</html>