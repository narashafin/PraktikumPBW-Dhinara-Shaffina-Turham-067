<?php

$hewan = [
    "Kambing" => "Herbivora",
    "Harimau" => "Karnivora",
    "Sapi" => "Herbivora",
    "Kucing" => "Karnivora",
    "Rusa" => "Herbivora"
];

foreach ($hewan as $nama => $jenis) {
    echo $nama . " : " . $jenis . "<br>";
}
