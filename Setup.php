<?php 
class Setup{
    public $connect;
    public $host;
    public $dbname;
    public $user;
    public $pass;
    public $db;

    public function __construct($dbhost,$dbname,$dbuser,$dbpass){
        $this->connect = "mysql:host=" . $dbhost . ";dbname=" . $dbname . ";charsetutf8";
        $this->db = new PDO($this->connect, $dbuser, $dbpass);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function registerUser($data){
        $query = "INSERT INTO `user` (`id`, `nama_user`, `email_user`, `pass_user`, `alamat_user`, `telp_user`) VALUES (NULL, ?, ?, ?, ?, ?)";
        $state = $this->db->prepare($query);
        $parameter = [$data->nama, $data->email, $data->pass, $data->alamat, $data->telepon];
        return $state->execute($parameter);
    }

    public function tambahmakan($menu){
        $query = "INSERT INTO `menu` (`idmakanan`, `makanan_menu`, `jumlah_menu`,'alamat_menu, `pendonasi_menu`) VALUES (NULL, ?, ?, ?, ?)";
        $state = $this->db->prepare($query);
        $parameter = [$menu->makanan, $menu->jumlah, $menu->pendonasi];
        return $state->execute($parameter);
    }

    public static function getUser($id=NULL){
        $setup = new Setup("localhost", "foodo", "root","");
        $query = "SELECT * FROM 'user' ";
        if($id!=NULL){
            $query = "WHERE id = ?";
        }
        $statement = $setup->db->prepare($query);
        $parameters = [$id];
        $statement ->execute($parameters);
        return $statement->fetchAll();
    }
}

?>