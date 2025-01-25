<?php
/* Aturan Soal
    1. Nilai 81-100 = A
    2. Nilai 78-80 = A- 
    3. Nilai 75-77 = B+
    4. Nilai 70-74 = B
    5. Nilai 65-69 = B-
    6. Nilai 60-64 = C+
    7. Nilai 55-59 = C
    8. Nilai 40-54 = D
    9. Nilai 0-39 = E
*/
$nilai = 100;

echo "Nilai: {$nilai} <br>";

if ($nilai >= 81 AND $nilai <= 100) {
    echo "Nilai anda $nilai, mendapat grade <b>A</b>, Predikat : A, Bobot : 4";
} elseif ($nilai >= 78 AND $nilai < 81) {
    echo "Nilai anda $nilai, mendapat grade <b>A-</b>, Predikat : A-, Bobot : 3.7";
} elseif ($nilai >= 75 AND $nilai < 78) {
    echo "Nilai anda $nilai, mendapat grade <b>B+</b>, Predikat : B+, Bobot : 3.3";
} elseif ($nilai >= 70 AND $nilai < 75) {
    echo "Nilai anda $nilai, mendapat grade <b>B</b>, Predikat : B, Bobot : 3";
} elseif ($nilai >= 65 AND $nilai < 70) {
    echo "Nilai anda $nilai, mendapat grade <b>B-</b>, Predikat : B-, Bobot : 2.7";
} elseif ($nilai >= 60 AND $nilai < 65) {
    echo "Nilai anda $nilai, mendapat grade <b>C+</b>, Predikat : C+, Bobot : 2.3";
} elseif ($nilai >= 55 AND $nilai < 60) {
    echo "Nilai anda $nilai, mendapat grade <b>C</b>, Predikat : C, Bobot : 2";
} elseif ($nilai >= 40 AND $nilai < 55) {
    echo "Nilai anda $nilai, mendapat grade <b>D</b>, Predikat : D, Bobot : 1";
} elseif ($nilai >= 39 AND $nilai < 40) {
    echo "Nilai anda $nilai, mendapat grade <b>E</b>, Predikat : E, Bobot : 0";
} else {
    echo "Nilai Invalid";
}