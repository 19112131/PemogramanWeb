<?php
    session_start();

    // menghapus semua session
    session_destroy();
    // alih ke page dan kirin pesan
    header("location:../home.php?pesan=logout");
?>