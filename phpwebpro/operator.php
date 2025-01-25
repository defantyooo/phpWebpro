<?php
//Operator
echo "<h1>Operator Aritmetika</h1>";
$a = 10 + 5;
echo $a;
$a = (10 + (-3*5)) / 3;
echo "<br>$a<br>";

$a = 5;
$b = 10;

# operator aritmatika standar
echo "{$a} + {$b} = " . ($a + $b) . " <br>";
echo "{$a} - {$b} = " . ($a - $b) . " <br>";
echo "{$a} * {$b} = " . ($a * $b) . " <br>";
echo "{$a} / {$b} = " . ($a / $b) . " <br>";

# modulus
echo "{$a} % {$b} = " . ($a % $b) . " <br>";
# eksponensial
echo "{$a} ** {$b} = " . ($a ** $b) . " <br>";
# negasi
echo "-a = " . (-$a) . " <br>";

echo "<h1>Operator Penugasan</h1>";

$nilaiMatematika = 8;
$rataRata = (10 + 7 + $nilaiMatematika) / 3;

$namaDepan = "Damian";
$namaBelakang = "{$namaDepan} Howard";

$a = 5;
$a += 10;
echo var_dump($a) . "<br>";

$a -= 20;
echo var_dump($a) . "<br>";

$a *= 100;
echo var_dump($a) . "<br>";

$a /= 10;
echo var_dump($a) . "<br>";

//Operator Perbandingan
echo "<h1>Operator Perbandingan</h1>";

$nilai = 90;
$lulus = $nilai > 80;

echo "{$nilai} > 80 = ";
var_dump($lulus);
echo "<br>";

echo "3 >= 3 = ";
var_dump(3 >= 3);
echo "<br>";

echo "6 < 5 = ";
var_dump(6 < 5);
echo "<br>";

echo "'a' < 'b' = ";
var_dump('a' < 'b');
echo "<br>";

echo "'mnm' < 'jmj' = ";
var_dump('mnm' < 'jmj');
echo "<br>";

