<?php
if (empty($_POST['nama']) && empty($_POST['npm']) ) {
    echo "Nama/NPM tidak boleh kosong!";
    $name = "";

} else {
    $name = $_POST['nama'];
    $npm = $_POST['npm'];
}


$prodi = $_POST['prodi'];
$semester = $_POST['semester'];
$ukt = $_POST['ukt'];

?>
<h2>Hasil</h2>
<table border="1" cellpadding="8" cellspacing="0" style="border-collapse:collapse;">
    <tr>
        <td style="font-weight: bolder;">NPM</td>
        <td><?php echo $npm; ?></td>
    </tr>
    <tr>
        <td style="font-weight: bolder;">Nama</td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td style="font-weight: bolder;">Prodi</td>
        <td><?php echo $prodi; ?></td>
    </tr>
    <tr>
        <td style="font-weight: bolder;">Semester</td>
        <td><?php echo $semester; ?></td>
    </tr>
    <tr>
        <td style="font-weight: bolder;">Biaya UKT</td>
        <td><?php echo $ukt; ?></td>
    </tr>
    <tr>
        <td style="font-weight: bolder;">Diskon</td>
        <td>
            <?php
            if($ukt >= 5000000 && $semester > 8){
                echo "15%";
            } else if($ukt >= 5000000){
                echo "10%";
            } else{
                echo "tidak valid";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td style="font-weight: bolder;">Yang harus dibayar</td>
        <td>
            <?php
            if($ukt >= 5000000 && $semester > 8){
                echo $ukt - ($ukt*0.15);
            } else if($ukt >= 5000000){
                echo $ukt - ($ukt*0.1);
            } else{
                echo "tidak valid";
            }
            ?>
        </td>
    </tr>
</table>

