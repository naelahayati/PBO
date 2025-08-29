<?php
// Input data
$pinjaman = 1000000;
$bungaPersen = 10; // persen
$lamaAngsuran = 5; // bulan
$keterlambatanHari = 40;

// Hitung total pinjaman dengan bunga
$totalPinjaman = $pinjaman + ($pinjaman * $bungaPersen / 100);

// Hitung angsuran per bulan
$angsuran = $totalPinjaman / $lamaAngsuran;

// Hitung denda keterlambatan (0.15% per hari dari angsuran)
$dendaPerHari = 0.15 / 100 * $angsuran;
$totalDenda = $dendaPerHari * $keterlambatanHari;

// Hitung besaran pembayaran (angsuran + denda)
$besaranPembayaran = $angsuran + $totalDenda;

// Tampilkan hasil
echo "Keterlambatan Angsuran (Hari): " . $keterlambatanHari . "<br>";
echo "Denda Keterlambatan : Rp " . number_format($totalDenda, 0, ',', '.') . "<br>";
echo "Besaran Pembayaran : Rp " . number_format($besaranPembayaran, 0, ',', '.') . "<br>";
?>
