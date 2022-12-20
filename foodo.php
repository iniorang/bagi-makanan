<?php 
class foodo{
    public $connect;
    public $host;
    public $dbname;
    public $user;
    public $pass;
    public $db;
    public function __construct($host,$dbname,$dbuser,$dbpass){
        $this->connect = "mysql:host" . $host . ";dbname=" . $dbname . ";charsetutf8";
        $this->db = new PDO($this->connect, $dbuser, $dbpass);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function registerUser($data){
        $querry = "INSERT INTO `user` (`id`, `nama_user`, `email_user`, `pass_user`, `alamat_user`) VALUES (NULL, ?, ?, ?, ?)";
        $state = $this->db->prepare($querry);
        $parameter = [$data->nama, $data->email, $data->pass, $data->alamat, $data->telepon];
        return $state->execute($parameter);
    }
}

?>