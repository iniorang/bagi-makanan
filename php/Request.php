<?php
class public {
    public $idmakanan;
    public $namamakanan;
    public $jumlah;
    public $harga;
    public $total;

    function set_idmakanan($idmakanan) {
        $this->idmakanan = $idmakanan;
      }
    function get_idmakanan($idmakanan) {
       return $this->idmakanan;
      }
      function set_namamakanan($namamakanan) {
          $this->namamakanan = $namamakanan;
        }
      function get_namamakanan($namamakanan) {
         return $this->namamakanan;
        }
        function set_jumlah($jumlah) {
            $this->jumlah = $jumlah;
          }
        function get_jumlah($jumlah) {
           return $this->jumlah;
          }
        function set_harga($harga) {
            $this->harga = $harga;
          }
        function get_harga($harga) {
           return $this->harga;
          }
        function set_total($total) {
            $this->total = $total;
          }
        function get_total($total) {
           return $this->total;
          }
}
$kfc = new menu();
$kfc->set_idmakanan('1');
$kfc->set_namamakanan('Ayama Goyeng');
$kfc->set_jumlah('2');
$kfc->set_harga('12000');
$kfc->set_total('24000');
?>
