<?php

$conn = new mysqli('localhost', 'root', '', 'pengelolaan_buku');


if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}

?>