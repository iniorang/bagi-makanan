<?php
class public{
    public $idmitra;
    public $namamitra;
    public $deskripsi;

    function set_idmitra($idmitra) {
      $this->idmitra = $idmitra;
    }
  function get_idmitra($idmitra) {
     return $this->idmitra;
    }
    function set_namamitra($namamitra) {
        $this->namamitra = $namamitra;
      }
    function get_namamitra($namamitra) {
       return $this->namamitra;
      }
      function set_deskripsi($deskripsi) {
          $this->deskripsi = $deskripsi;
        }
      function get_deskripsi($deskripsi) {
         return $this->deskripsi;
        }
}
$kfc = new menu();
$kfc->set_idmitra('1');
$kfc->set_namemitra('Kentucky Fried Chicken');
$kfc->set_deskripsi('KFC enak lhoo');
 

