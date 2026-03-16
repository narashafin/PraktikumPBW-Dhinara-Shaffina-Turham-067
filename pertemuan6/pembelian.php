<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Total Pembelian</title>
</head>
<body>
    <h2>Perhitungan Total Pembelian:</h2>
    <hr>
    <h3>Berikut ini struk pembelian:</h3>

<?php


$barang = [
    'keyboard' => 150000,
    'buku' => 5000,
    'pensil' => 2000,
    'penghapus' => 1000,
    'pulpen' => 3000,
    'penggaris' => 4000,
    'tip-x' => 5000
];

define('PAJAK', 0.1);

$namaBarang = 'keyboard'; 
$harga = $barang[$namaBarang];

$jumlah = 2;

function total($jumlah, $harga){
    return $jumlah * $harga;
}

$total = total($jumlah, $harga);
$pajak = $total * PAJAK;
$totalBayar = $total + $pajak;

echo "Nama Barang : " . $namaBarang . "<br>";
echo "Harga Satuan: " . $harga . "<br>";
echo "Jumlah Beli : " . $jumlah . "<br>";
echo "Total harga (sebelum pajak) : " . $total . "<br>";
echo "Pajak (10%) : " . $pajak . "<br>";
echo "Total Bayar : " . $totalBayar . "<br>";

?>

<hr>

</body>
</html>



    