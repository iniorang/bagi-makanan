<?php 
class user{
    public $id;
    public $name;
    public $email;
    public $pass;
    public $type;
    public $addres;
    function set_id($id) {
        $this->id = $id;
      }
      function get_id() {
        return $this->id;
      }
      function set_name($name) {
        $this->name = $name;
      }
      function get_name() {
        return $this->name;
      }
      function set_email($email) {
        $this->email = $email;
      }
      function get_email() {
        return $this->email;
      }
      function set_pass($pass) {
        $this->pass = $pass;
      }
      function get_pass() {
        return $this->pass;
      }
      function set_type($type) {
        $this->type = $type;
      }
      function get_type() {
        return $this->type;
      }
      function set_address($addres) {
        $this->addres = $addres;
      }
      function get_address() {
        return $this->addres;
      }
}



?>