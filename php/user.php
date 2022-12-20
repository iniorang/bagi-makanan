<?php 
class email{
    public $id;
    private $email;
    private $pass;
  
    function __construct($email,$pass)
    {
      $this->email = $email;
      $this->pass = $pass;
    }
    function getemail($email){
      return $email;
    }

    function getPass($pass){
      return $pass;
    }
  }

?>