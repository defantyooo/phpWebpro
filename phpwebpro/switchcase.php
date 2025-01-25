<?php
$menu = "/kontak";
switch ($menu) {
    case "/":
        echo "Anda berada di halaman utama";
        break;
    case "/tentang":
        echo "Anda berada di halaman tentang";
        break;
    case "/produk":
        echo "Anda berada di halaman produk";
        break;  
    case "/kontak":
        echo "Anda berada di halaman kontak";
        break;
    default:
        echo "Halaman $menu Tidak Ditemukan";
        break;
    }