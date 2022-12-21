<?php 
class User{
    public $id;
    public $nama;
    public $email;
    public $pass;
    public $alamat;
    public $telepon;
  
    function __construct($nama,$email,$pass,$alamat,$telepon)
    {
      $this->nama = $nama;
      $this->email = $email;
      $this->pass = $pass;
      $this->alamat = $alamat;
      $this->telepon = $telepon;
    }
  }

?>