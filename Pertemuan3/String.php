<?php

$namaDPN = "Salma"; #tanda petik 2
$namaBLKNG = 'Hardianti'; #tanda petik 1

#gabung 2 tanda
$namaLengkap = "{$namaDPN} {$namaBLKNG}"; #Petik 2

$namaLengkap2 = $namaDPN . ' ' . $namaBLKNG; #petik 1 (Digabung apke titik)

echo "Nama Depan : {$namaDPN} <br>";
echo 'Nama Belakang : ' . $namaBLKNG . '<br>';

echo $namaLengkap2;