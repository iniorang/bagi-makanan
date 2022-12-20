<?php 
class User{
    public $id;
    private $nama;
    private $email;
    private $pass;
    private $alamat;
    private $telepon;
  
    function __construct($nama,$email,$pass,$alamat,$telepon)
    {
      $this->nama = $nama;
      $this->email = $email;
      $this->pass = $pass;
      $this->alamat = $alamat;
      $this->telepon = $telepon;
    }
    function getNama($nama){
      return $nama;
    }
    function getEmail($email){
      return $email;
    }

    function getPass($pass){
      return $pass;
    }
    function getAlamat($alamat){
      return $alamat;
    }
    function getTelepon($telepon){
      return $telepon;
    }
  }

?>