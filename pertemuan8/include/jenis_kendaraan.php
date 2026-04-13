<?php

$jenis = "2";

switch($jenis){
    case '4':
        echo "mobil";
        break;
    case '2':
        echo "motor";
        break;
    case '3':
        echo "becak/bajaj";  
    case '6':
        echo "bus besar";  
    default:
        echo "unknown";
        break;

}