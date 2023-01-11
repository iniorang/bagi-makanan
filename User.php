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
    function register(){
      echo "Nama:".$this->nama;
      echo "</br>";
      echo "Mail:".$this->email;
      echo "</br>";
      echo "Alamat:".$this->alamat;
      echo "</br>";
      echo "Nomor:".$this->telepon;
      echo "</br>";
  }
  }

?>