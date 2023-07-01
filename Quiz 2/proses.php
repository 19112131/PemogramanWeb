<h2>Your Input</h2>
<h3>Perhitungan Gaji Anda</h3>
<?php
    if (isset($_POST['input'])){
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        $gaji = $_POST['gaji'];
        $bonus = $_POST['bonus'];
        
        $tunja = 0.05*$gaji;
        $pajak = 0.1*$gaji;
        $total = $gaji + $bonus + $tunja - $pajak;
        
        echo "=================== <br>". "NIP : <b>$nip</b><br>";
        echo "Nama : <b>$nama</b><br>". "=================== <br>";
        echo "Gaji Pokok Anda <b>". "Rp.". $gaji. "</b><br>";
        echo "Bonus Anda <b>". "Rp.".$bonus. "</b><br>";
        echo "Tunjangan yang Didapat sebesar <b>". "Rp.".$tunja. "</b><br>";
        echo "Potongan Pajak dari Gaji Pokok sebesar <b>". "Rp.".$pajak. "</b><br>". "=================== <br>";
        echo "Total Gaji yang akan dibayarkan sebesar <b>". "Rp.".$total. "</b>";
    }
?>