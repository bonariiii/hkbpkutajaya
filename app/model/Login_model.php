<?php 

class Login_model {
    private $table = 'admin';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    public function getAdmin($data)
    {   
        //ambil admin nya
        
        $query = "SELECT * FROM admin WHERE nama = :nama";

        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->execute();
        return $this->db->single();
        
    }
}


?>