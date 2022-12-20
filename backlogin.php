<?php 
require("php/user.php");
$user = $_POST['form_email'];
$pass = $_POST['form_userpass'];
$pengguna = new user($user,$pass);
echo "<pre>";
var_dump($pengguna);
echo "</pre>";
?>