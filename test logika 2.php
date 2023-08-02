<?php
function hitung_jumlah_kata($kalimat) {
    // Menghapus kata dengan karakter khusus menggunakan regular expression
    $kalimat_bersih = preg_replace('/\b[A-Za-z0-9]*[^A-Za-z0-9\s][A-Za-z0-9]*\b/', '', $kalimat);

    // Menghitung jumlah kata dalam kalimat yang telah dibersihkan
    $jumlah_kata = str_word_count($kalimat_bersih);

    return $jumlah_kata;
}

$input_kalimat = "Saat meng*ecat tembok, Agung dib_antu oleh Raihan.";
$output = hitung_jumlah_kata($input_kalimat);
echo "Output: " . $output . "\n";


$input_kalimat = "Berapa u(mur minimal[ untuk !mengurus ktp?";
$output = hitung_jumlah_kata($input_kalimat);
echo "Output: " . $output . "\n";


$input_kalimat = " Masing-masing anak mendap(atkan uang jajan ya=ng be&rbeda.
";
$output = hitung_jumlah_kata($input_kalimat);
echo "Output: " . $output . "\n";
?>