<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jadwal Kuliah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Input Jadwal Kuliah</h1>
    <form action="controlinput.php" method="post">
        <label for="kodematakuliah">Kode Matakuliah</label>
        <input type="text" name="kodematakuliah" id="kodematakuliah" onkeyup="limit(this);" onkeydown="limit(this);">
        <!-- Javascript digunakan untuk melimit input Kode Matakuliah menjadi 10 karakter -->
        <br>

        <label for="matakuliah">Matakuliah</label>
        <input type="text" name="matakuliah" id="matakuliah">
        <br>
        
        <label for="kelas">Kelas</label>
        <select name="kelas" id="kelas">
            <?php
            foreach(range('A', 'Z') as $kelas){
                echo "<option value='$kelas'>$kelas</option>";
            }
            // Perulangan sebanyak deret alphabet, dimana deret alphabet tersebut
            // digunakan untuk mengisikan option dari dropdown 'kelas'
            ?>
        </select>
        <br>
        
        <label for="pengampu">Pengampu</label>
        <input type="text" name="pengampu" id="pengampu">
        <br>
        
        <label for="hari">Hari</label>
        <select name="hari" id="hari">
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
            <option value="Rabu">Rabu</option>
            <option value="Kamis">Kamis</option>
            <option value="Jumat">Jumat</option>
        </select>
        <br>

        <label for="jam">Jam</label>
        <select name="jammulai" id="jammulai">
            <option value="Pilih Jam">Pilih Jam</option>
            <option value="07:00">07:00</option>
            <option value="08:00">08:00</option>
            <option value="09:00">09:00</option>
            <option value="10:00">10:00</option>
            <option value="11:00">11:00</option>
            <option value="12:00">12:00</option>
            <option value="13:00">13:00</option>
            <option value="14:00">14:00</option>
            <option value="15:00">15:00</option>
            <option value="16:00">16:00</option>
            <option value="17:00">17:00</option>
            <option value="18:00">18:00</option>
        </select>
        -
        <select name="jamselesai" id="jamselesai">
            <option value="Pilih Jam">Pilih Jam</option>
            <option value="07:00">07:00</option>
            <option value="08:00">08:00</option>
            <option value="09:00">09:00</option>
            <option value="10:00">10:00</option>
            <option value="11:00">11:00</option>
            <option value="12:00">12:00</option>
            <option value="13:00">13:00</option>
            <option value="14:00">14:00</option>
            <option value="15:00">15:00</option>
            <option value="16:00">16:00</option>
            <option value="17:00">17:00</option>
            <option value="18:00">18:00</option>
        </select>
        <br>

        <input type="submit" value="Simpan" name="simpan-btn">
        <input type="submit" value="Update" name="update-btn">
        <a href="tampiljadwal.php">Lihat Jadwal</a>
    </form>

    <script src="javascript.js"></script>
</body>
</html>