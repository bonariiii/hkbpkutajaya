<?php

class Warta_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllWarta()
    {
        //DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), jemaat.tanggal_lahir)), '%Y') + 0 AS umur
        $query = "SELECT *, DATE_FORMAT(tanggal_warta, '%e %M %Y') AS tanggal FROM warta_jemaat ";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();  
    }

    public function hapusWarta($id)
    {
        //tangkap parameter nya untuk dijadikan id lalu ambil data jemaat berdasarkan id tersebut
        $query = "DELETE FROM warta_jemaat WHERE id_warta = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tambahWarta($data)
    {
        $query = "INSERT INTO warta_jemaat (tanggal_warta, link_warta) VALUES (:tanggalwarta , :linkwarta)";
        $this->db->query($query);
        $this->db->bind('tanggalwarta', $data['tanggal_warta']);
        $this->db->bind('linkwarta', $data['link_warta']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getUbahWarta($data)
    {
        //ambil data
        $query= "SELECT * FROM warta_jemaat WHERE id_warta = :id";
        $this->db->query($query);
        $this->db->bind('id', $data);
        $this->db->execute();
        return $this->db->single();
    }

    public function ubahWarta($data)
    {
        $this->db->query("UPDATE warta_jemaat SET tanggal_warta = :tanggalwarta, link_warta = :linkwarta WHERE id_warta = :id");
        $this->db->bind('id', $data['id_warta']);
        $this->db->bind('tanggalwarta', $data['tanggal_warta']);
        $this->db->bind('linkwarta', $data['link_warta']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}