<?php

$nilaiMTK = 5.1;
$nilaiIPA = 6.7;
$nilaiBINDO = 9.3;

#Hitung rata-rata
$ratarata = ($nilaiMTK + $nilaiIPA +$nilaiBINDO) / 3;

#tampilin data
echo "Matematika : {$nilaiMTK} <br>";
echo "IPA : {$nilaiIPA} <br>";
echo "Bahasa Indonesia : {$nilaiBINDO} <br>";
echo "Rata-rata : {$ratarata} <br>";

#liat tipe data dri variabel
var_dump($ratarata);
