<?php

$nama_lengkap = "Dimas Putra Agustav";
$kelas = "X-RPL-2";  
$biaya_spp = 600000;
$tunggakan_bulan = 3;
$kategori = "Beasiswa";  
function hitung_total_spp($biaya_spp, $tunggakan_bulan, $kategori) {
    $diskon = ($kategori == 'Beasiswa' && $tunggakan_bulan < 6) ? 0.5 : 0;
    $denda = max(0, ($tunggakan_bulan - 5)) * 100000;  
    $total_spp = $biaya_spp * $tunggakan_bulan * (1 - $diskon) + $denda;
    return $total_spp;
}

function status_pembayaran($total_spp) {
    if ($total_spp == 0) {
        return "<span style='color: green;'>Sudah Lunas</span>";
    } elseif ($total_spp > 0 && $total_spp <= 1050000) {
        return "<span style='color: yellow;'>Belum Lunas</span>";
    } else {
        return "<span style='color: red;'>Menunggak Terlalu Lama </span>";
    }
}



// Proses penghitungan
$total_spp = hitung_total_spp($biaya_spp, $tunggakan_bulan, $kategori);
$status = status_pembayaran($total_spp);

// Output
echo "=== Program SPP Sederhana === <br/>";
echo "Nama Lengkap : $nama_lengkap <br/>";
echo "Kelas : $kelas <br/>";
echo "Kategori : $kategori <br/>";
echo "Biaya SPP : Rp " . number_format($biaya_spp, 0, ',', '.') . " <br/>";
echo "Tunggakan SPP : $tunggakan_bulan bulan\n <br/>";
echo "Total yang harus dibayar : Rp " . number_format($total_spp, 0, ',', '.') . " <br/>";
echo "Status : $status <br/>";


?>