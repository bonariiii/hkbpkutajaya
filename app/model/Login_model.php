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
        //Cek nama dalam database jika ada lanjutkan login jika tidak arahkan untuk registrasi (beri nilai false)
        $query = "SELECT * FROM admin WHERE nama = :nama";
        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->execute();
        return $this->db->single();
        
    }
}


?>