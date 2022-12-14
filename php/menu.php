<?php
class menu{
    public $idmenu;
    public $namemenu;
    public $amntmenu;
    public $descmen;
    public $typemenu;

    function set_idmenu($idmenu) {
        $this->idmenu = $idmenu;
      }
      function get_idmenu($idmenu) {
        return $this->idmenu;
      }

      function set_namemenu($namemen) {
        $this->namemenu = $namemen;
      }
      function get_namemenu() {
        return $this->namemenu;
      }

      function set_amntmenu($amntmenu) {
        $this->amntmenu = $amntmenu;
      }
      function get_amntmenu() {
        return $this->amntmenu;
      }
      function set_deskmen($descmen) {
        $this->descmen = $descmen;
      }
      function get_descmen() {
        return $this->descmen;
      }
      function set_typemenu($typemenu) {
        $this->typemenu = $typemenu;
      }
      function get_typemenu() {
        return $this->typemenu;
      }      
}
$naskun = new menu();
$naskun->set_idmenu('1');
$naskun->set_namemenu('Nasi Kuning');
$naskun->set_deskmen('Naskun yang orderanya dicancel sm orang');
$naskun->set_typemenu('Makanan');
$naskun->set_amntmenu('50');
?>