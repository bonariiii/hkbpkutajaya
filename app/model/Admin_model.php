<?php 

class Admin_model {
    private $table = 'mahasiswa';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    public function tambahAdmin($data)
    {   

        //cek nama apakah nama sudah ada dalam database jika ada maka kembalikan nilai false
        $queryceknama = "SELECT COUNT(*) AS num FROM admin WHERE nama = :nama";
        $this->db->query($queryceknama);
        $this->db->bind('nama', $data['nama']); 
        $this->db->execute();
        $row = $this->db->single();
        if ($row['num'] > 0) {
            return "nama sudah digunakan";
            die();
        } else {

        //jika belum ada namanya dalam database maka lanjutkan proses registrasi
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

    public function getAllJemaat()
    {
        //DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), jemaat.tanggal_lahir)), '%Y') + 0 AS umur
        $query = "SELECT jemaat.nama_jemaat, DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), jemaat.tanggal_lahir)), '%Y') + 0 AS umur, jemaat.alamat_jemaat, wijk.nama_wijk, jemaat.jenis_kelamin, jemaat.status_menikah FROM jemaat INNER JOIN wijk ON jemaat.wijk = wijk.id_wijk";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }


}


?>