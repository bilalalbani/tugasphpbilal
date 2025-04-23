<?php
// Contoh penggunaan operator ternary di PHP

// Misalnya kita punya sebuah nilai dari user
$umur = 20;

// Ternary operator digunakan untuk mengevaluasi kondisi secara singkat
// Bentuk umum: kondisi ? nilai_jika_true : nilai_jika_false;

// Kita ingin mengecek apakah seseorang cukup umur untuk mengemudi
$status = ($umur >= 17) ? "Boleh mengemudi" : "Belum boleh mengemudi";

// Menampilkan hasil
echo "Status: " . $status;
?>