<?php 
require("User.php");
require("Setup.php");
$nama = $_POST['form_nama'];
$email = $_POST['form_email'];
$pass = $_POST['form_pass'];
$alamat = $_POST['form_alamat'];
$telepon = $_POST['form_telp'];

$pengguna = new User($nama, $email, $pass, $alamat, $telepon);

$setdb = new Setup("localhost", "foodo", "root", "");
$setdb->registerUser($pengguna);
?>