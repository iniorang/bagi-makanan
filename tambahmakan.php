<?php
    class menu{
        public $idmakanan;
        public $makanan;
        public $jumlah;
        public $alamat;
        public $pendonasi;

        function __construct($idmakanan, $makanan, $jumlah, $pendonasi){
            $this->idmakanan = $idmakanan;
            $this->makanan = $makanan;
            $this->jumlah = $jumlah;
            $this->alamat = $alamat;
            $this->pendonasi = $pendonasi;
        }
    }