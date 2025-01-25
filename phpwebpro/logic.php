<?php
echo "<h1>Contoh if</h1>";
$hasil = "Lulus";
if ($hasil == "Lulus") {
    echo "Selamat Anda $hasil";
} 

echo "<h1>Contoh if dengan 2 Pilihan</h1>";
if ($hasil == "Lulus") {
    echo "Selamat Anda $hasil";
} else {
    echo "Maaf Anda $hasil";
}

echo "<h1>Contoh if dengan 3 Pilihan</h1>";
$nilai = 50;
if ($nilai >=60) {
    echo "Selamat Anda <b>Lulus</b>";
} elseif ($nilai >= 50) {
    echo "Anda <b>Remedial</b>, nilai anda $nilai";
} else {
    echo "Maaf Anda <b>Tidak Lulus</b>, Nilai anda $nilai";
}

echo "<h1>Contoh if dengan 3 Pilihan</h1>";
$nilai = -20;
if ($nilai >= 60) {
    echo "Selamat Anda <b>Lulus</b>";
} elseif ($nilai >= 50) {
    echo "Anda <b>Remedial</b>, nilai anda $nilai";
} else {
    echo "Maaf Anda <b>Tidak Lulus</b>, Nilai anda $nilai";
}

echo "<h1>Batas Atas</h1>";
if ($nilai < 50) {
    echo "Maaf Anda <b>Tidak Lulus</b>, Nilai anda $nilai";
} elseif ($nilai < 60) {
    echo "Anda <b>Remedial</b>, nilai anda $nilai";
} else {
    echo "Selamat Anda <b>Lulus</b>";
}

echo "<h1>Batas atas dan Bawah</h1>";
if ($nilai >= 60 AND $nilai <= 100) {
    echo "Selamat Anda <b>Lulus</b>";
} elseif ($nilai >= 50 AND $nilai < 60) {
    echo "Anda <b>Remedial</b>, nilai anda $nilai";
} elseif ($nilai >= 0 AND $nilai < 50) {
    echo "Maaf, anda tidak <b>Lulus</b>, nilai anda $nilai";
} else {
    echo "Nilai anda <b>tidak valid</b>, Nilai anda $nilai";
}