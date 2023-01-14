<?php

class Jemaat_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllJemaat()
    {
        //DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), jemaat.tanggal_lahir)), '%Y') + 0 AS umur
        $query = "SELECT jemaat.id_jemaat, jemaat.nama_jemaat, DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), jemaat.tanggal_lahir)), '%Y') + 0 AS umur, jemaat.alamat_jemaat, wijk.nama_wijk, jemaat.jenis_kelamin, jemaat.status_menikah FROM jemaat INNER JOIN wijk ON jemaat.wijk = wijk.id_wijk";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function hapusJemaat($id)
    {
        //tangkap parameter nya untuk dijadikan id lalu ambil data jemaat berdasarkan id tersebut
        $query = "DELETE FROM jemaat WHERE id_jemaat = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
