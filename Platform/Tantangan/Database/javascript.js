function limit(element) {
  var max_chars = 10;

  if (element.value.length >= max_chars) {
    element.value = element.value.substr(0, max_chars);
  }
}
// Function yang digunakan untuk melimit karakter yang diinputkan ke dalam text field 'Kode Matakuliah'