<!DOCTYPE html>
<html lang="en">

<head>
  <title>Gudang</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <h1>Input Stok Gudang Gadget</h1>

  <form action="control.php" method="post">
    <label for="produkid">Produk ID</label>
    <input type="text" name="produkid" class="id" onkeydown="limit(this);" onkeyup="limit(this);" />
    <!-- Javascript digunakan untuk melimit input Kode Matakuliah menjadi 5 karakter -->
    <a href="tampil.php">Lihat Semua</a>
    <br />

    <label for="merk">Merk</label>
    <input type="text" name="merk" />
    <br />

    <label for="tipe">Tipe</label>
    <input type="text" name="tipe" />
    <br />

    <div>
      <label for="jenis">Jenis</label>
      <input type="radio" name="jenis" value="Smartphone" />
      <label for="smartphone">Smartphone</label>
    </div>

    <div class="radio-container">
      <input type="radio" name="jenis" value="Tablet" />
      <label for="tablet">Tablet</label>
    </div>
    <br />

    <label for="platform">Platform</label>
    <select name="platform" id="platform">
      <option value="Android">Android</option>
      <option value="iOS">iOS</option>
    </select>
    <br />

    <label for="harga">Harga</label>
    <input type="number" name="harga" />
    <br />

    <label for="jumlah">Jumlah</label>
    <input type="number" name="jumlah" />
    <br />

    <input type="submit" value="Simpan" name="simpan_btn" />
    <input type="submit" value="Update" name="update_btn" />
    <input type="submit" value="Hapus" name="hapus_btn" />
  </form>

  <script src="javascript.js"></script>
</body>

</html>