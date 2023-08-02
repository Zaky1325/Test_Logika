<?php
function hitung_jumlah_pasang($arr) {
    $count_dict = array();
    foreach ($arr as $num) {
        if (array_key_exists($num, $count_dict)) {
            $count_dict[$num] += 1;
        } else {
            $count_dict[$num] = 1;
        }
    }

    $total_pasang = 0;
    foreach ($count_dict as $count) {
        $total_pasang += floor($count / 2);
    }

    return $total_pasang;
}


$input_arr = array(10, 20, 20, 10, 10, 30, 50, 10, 20);
$output = hitung_jumlah_pasang($input_arr);
echo "Output: " . $output . "\n";

$input_arr = array(6, 5, 2, 3, 5, 2, 2, 1, 1, 5, 1, 3, 3, 3, 5);
$output = hitung_jumlah_pasang($input_arr);
echo "Output: " . $output . "\n";

$input_arr = array(1,1, 3, 1, 2, 1, 3, 3, 3, 3);
$output = hitung_jumlah_pasang($input_arr);
echo "Output: " . $output . "\n";
?>
