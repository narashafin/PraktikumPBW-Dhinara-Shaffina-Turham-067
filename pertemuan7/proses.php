<?php
if (empty($_POST['nama'])) {
    echo "Nama tidak boleh kosong!";
    $name = "";

} else {
    $name = $_POST['nama'];
}


$nilai = $_POST['nilai'];
$kuliah = $_POST['kuliah'];
?>

<h2>Hasil</h2>
<table border="1" cellpadding="8" cellspacing="0" style="border-collapse:collapse;">
    <tr>
        <td style="font-weight: bolder;">Nama</td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td style="font-weight: bolder;">Nilai</td>
        <td><?php echo $nilai; ?></td>
    </tr>
    <tr>
        <td style="font-weight: bolder;">Mengambil mata kuliah?</td>
        <td><?php echo $kuliah; ?></td>
    </tr>
    <tr>
        <td style="font-weight: bolder;">Predikat</td>
        <td>
           <?php
            if($nilai <= 100 && $nilai >=85 && ($kuliah == "Ya" || $kuliah == "ya")){
                echo "Nilai anda adalah A";
            } else if ($nilai <= 84 && $nilai >=75 && ($kuliah == "Ya" || $kuliah == "ya")){
                echo "Nilai anda adalah B";
            } else if($nilai <= 74 && $nilai >= 65 && ($kuliah == "Ya" || $kuliah == "ya")){
                echo "Nilai anda adalah C";
            } else if ($nilai <= 64 && $nilai >= 50 && ($kuliah == "Ya" || $kuliah == "ya")){
                echo "Nilai anda adalah D";
            } else if ($nilai <= 49 || ($kuliah == "Tidak" || $kuliah == "Tidak")){
                echo "Nilai anda adalah E";
            } else{
               echo "Nilai yang anda input tidak valid";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td style="font-weight: bolder;">Status</td>
        <td>
            <?php
           if($nilai >= 50 && strtolower($kuliah) == "ya"){
                echo "Status: Lulus";
            } else{
                echo "Status: Tidak lulus";
            }
            ?>
        </td>
    </tr>
</table>
