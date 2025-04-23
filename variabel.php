<?php
$tinggi_badan = 175; // Tinggi badan dalam cm
$kategori = "";

if ($tinggi_badan < 150) {
    $kategori = "Pendek";
} else {
    if ($tinggi_badan <= 160) {
        $kategori = "Normal";
    } else {
        $kategori = "Tinggi";
    }
}

echo "Tinggi Badan: $tinggi_badan cm<br>";
echo "Kategori: $kategori";
?>