<!DOCTYPE html>
<html>
  <head>
    <title>Gudang Gadget</title>
    <style>
      select {
        width: 100px;
        margin: 3px;
        display: inline-block;
        border: 1px solid gray;
        box-sizing: border-box;
      }
      input[type="text"], input[type="number"] {
        width: 200px;
        margin: 3px;
        display: inline-block;
        border: 1px solid gray;
        box-sizing: border-box;
      }
      input[type="submit"] {
        width: 90px;
        padding: 5px;
        margin: 20px 3px;
        display: inline-block;
        border: 1px solid gray;
        box-sizing: border-box;
      }
      label {
        display: inline-block;
        width: 100px;
        text-align: left;
      }
      .radio-container {
        margin-top: 8px;
        margin-left: 104px;
      }
    </style>
  </head>
  <body>
    <h1>Input Stok Gudang Gadget</h1>
    <form action="controlInput.php" method="post">
      <label for="produkid">Produk ID</label>
      <input type="text" name="produkid" class="id" onkeydown="limit(this);" onkeyup="limit(this);">
      <a href="tampilGudang.php">Lihat Semua</a>
      <br>
      <label for="merk">Merk</label>
      <input type="text" name="merk">
      <br>
      <label for="tipe">Tipe</label>
      <input type="text" name="tipe">
      <br>

      <div>
        <label for="jenis">Jenis</label>
        <input type="radio" name="jenis" value="Smartphone">
        <label for="smartphone">Smartphone</label>
      </div>

      <div class="radio-container">
        <input type="radio" name="jenis" value="Tablet">
        <label for="tablet">Tablet</label>
      </div>
      <br>

      <label for="platform">Platform</label>
      <select name="platform" id="platform">
        <option value="Android">Android</option>
        <option value="iOS">iOS</option>
      </select>
      <br>

      <label for="harga">Harga</label>
      <input type="number" name="harga">
      <br>

      <label for="jumlah">Jumlah</label>
      <input type="number" name="jumlah">
      <br>

      <input type="submit" value="Simpan" name="simpan">
      <input type="submit" value="Update" name="update">
      <input type="submit" value="Hapus" name="hapus">
    </form>

    <script>
      function limit(element) {
        var max_chars = 5;

        if (element.value.length >= max_chars) {
          element.value = element.value.substr(0, max_chars);
        }
      }
    </script>
  </body>
</html>