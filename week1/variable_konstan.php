<?php
// definisikan variable konstanta
define ('PHI', 3.14);

// soal 1 hitung luas lingkaran dengan jari-jari
// soal 2 hitung keliling lingkaran

// definisikan nilai jari-jari
$jari = 8;

// hitung nilai luas
$luas = PHI * $jari * $jari;
// hitung nilai keliling
$kll = 2 * PHI * $jari;

echo 'luas lingkaran dengan jari-jari ' .$jari. ' = ' .$luas;
echo '<br/>keliling nya : ' .$kll;
?>