<?php
    require('tambahmakan.php')
    require('setup.php')
    $idmakanan = $_POST('IDmakanan')
    $makanan = $_POST('makanan')
    $jumlah = $_POST('jumlah')
    $pendonasi = $_POST('pendonasi')

    $menu = new menu($idmakanan, $makanan, $jumlah, $pendonasi)

    $setdb = new Setup("localhost", "foodo", "root", "")
    $setdb = tambahmakan($menu)
    ?>