<?php
echo "<h1>Operator Ternary</h1>";
$gender = "tes";
echo $gender == "Laki-laki" ? "Laki-laki" : "Perempuan";
echo "<br>";

if ($gender == "Laki-laki") {
    echo "Laki-laki";
} else {ss
    echo "Perempuan";
}

echo "<hr>";
$waktu = 20;
echo $waktu <= 18 ? "Siang Hari" : "Malam Hari";

echo "<hr>";
if ($waktu <= 18) {
    echo "Siang Hari";
} else {
    echo "Malam Hari";
}

