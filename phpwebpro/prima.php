<?php
for ($angka = 1; $angka <= 50; $angka++) {
    if ($angka <= 1) {
        continue; 
    }

    $prima = true;

    for ($i = 2; $i <= sqrt($angka); $i++) {
        if ($angka % $i == 0) {
            $prima = false;
            break;
        }
    }

    if ($prima) {
        echo $angka . " Merupakan bilangan prima.<br>";
    }
}
?>