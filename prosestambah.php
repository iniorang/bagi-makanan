<?php
    require("tambahmakan.php");
    require("setup.php");
    $idmakanan = $_POST('IDmakanan');
    $makanan = $_POST('makanan');
    $jumlah = $_POST('jumlah');
    $alamat = $_POST('alamat');
    $pendonasi = $_POST('pendonasi');

    $menu = new menu($idmakanan, $makanan, $jumlah, $alamat, $pendonasi);

    $setdb = new Setup("localhost", "foodo", "root", "");
    $setdb = tambahmakan($menu);
    ?>