function cekNilai() {
  let nama = document.getElementById("name").value;
  let npm = document.getElementById("npm").value;
  let nilai = parseFloat(document.getElementById("nilai").value);
  let hasil = document.getElementById("hasil");

  if (nama === "" || npm === "" || isNaN(nilai)) {
    hasil.innerHTML = "Masukkan nama, npm, dan nilai dengan benar!!!";
    hasil.style.color = "red";
    return;
  }

  let hurufMutu;
  if (nilai >= 80 && nilai <= 100) hurufMutu = "A";
  else if (nilai >= 70 && nilai <= 79) hurufMutu = "B";
  else if (nilai >= 60 && nilai <= 69) hurufMutu = "C";
  else if (nilai >= 50 && nilai <= 59) hurufMutu = "D";
  else if (nilai >= 0 && nilai <= 49) hurufMutu = "E";
  else hurufMutu = "Nilai tidak valid";

  hasil.innerHTML =
    "Nama: " + nama + "<br>NPM: " + npm + "<br>Huruf Mutu: " + hurufMutu;
  hasil.style.color = "black";
}
