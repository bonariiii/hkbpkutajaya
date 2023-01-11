<?php 

class Admin_model {
    private $table = 'mahasiswa';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    public function tambahAdmin($data)
    {   

        //buat querynya
        $queryceknama = "SELECT COUNT(*) AS num FROM admin WHERE nama = :nama";
        //prepare pdonya
        $this->db->query($queryceknama);
        $this->db->bind('nama', $data['nama']); 
        //eksekusi
        $this->db->execute();
        //ambil barisnya
        $row = $this->db->single();
        //jika barisnya lebih besar dari 0 maka nama sudah digunakan 
        if ($row['num'] > 0) {
            return false;
            die();
        } else {

        $password = password_hash($data['password'], PASSWORD_DEFAULT);
        $query = "INSERT INTO admin VALUES ('', :nama, :email, :password)";

        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('email',$data['email']);
        $this->db->bind('password', $password);
        $this->db->execute();
        return $this->db->rowCount();
    }
}


}


?>