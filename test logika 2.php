`<?php
	function hitung_jumlah_kata($kalimat) {
    $jumlah = 0;
    
    foreach(explode(" ", $kalimat) as $string) {
      if (!preg_match('/[*_(\[!=&]/', $string))
      {
          $jumlah += 1;
      }
    }
    
    return $jumlah;
}

$input_kalimat = "Saat meng*ecat tembok, Agung dib_antu oleh Raihan.";
$output = hitung_jumlah_kata($input_kalimat);
echo "Output: " . $output . "\n";


$input_kalimat = "Berapa u(mur minimal[ untuk !mengurus ktp?";
$output = hitung_jumlah_kata($input_kalimat);
echo "Output: " . $output . "\n";


$input_kalimat = "Masing-masing anak mendap(atkan uang jajan ya=ng be&rbeda.
";
$output = hitung_jumlah_kata($input_kalimat);
echo "Output: " . $output . "\n";
?>