<?php
function hitungHargaCilok($n){
    $harga_satuan = 0;

    // if($n < 5){
    //     $harga_satuan = 1000;
    // } elseif($n>=5 && $n <= 9){
    //     $harga_satuan = 950;
    // } elseif ($n >= 10){
    //     $harga_satuan = 900;
    // }

    // return $n*$harga_satuan;

    $harga_satuan = ($n < 10) ? (($n >= 5)? 950:1000) : 900;

    return $n * $harga_satuan;
}

echo "beli 4 cilok: Rp." . hitungHargaCilok(4). "(Harusnya 4.000) <br>";
echo "beli 5 cilok: Rp." . hitungHargaCilok(5). "(Harusnya 4.750) <br>";
echo "beli 10 cilok: Rp." . hitungHargaCilok(10). "(Harusnya 9.000) <br>";