<?php

class Siswa_model{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    

    public function getSiswaById($id)
    {
        $this->db->query("SELECT * FROM siswa WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    
    public function getSiswa()
    {
        $this->db->query("SELECT * FROM siswa");
        return $this->db->resultSet();
    }

    public function tambahData($data)
    {
        $query = "INSERT INTO siswa VALUES ('', :nama, :kelas, :jurusan, :ttl, :alamat, :gender, :hp, :quotes)";

        $this->db->query($query);
        
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('ttl', $data['ttl']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('gender', $data['gender']);
        $this->db->bind('hp', $data['hp']);
        $this->db->bind('quotes', $data['quotes']);

        $this->db->execute();

        return $this->db->affectedRows();
    }

    public function hapusData($id)
    {
        $query = "DELETE FROM siswa WHERE id=:id";

        $this->db->query($query);

        $this->db->bind('id', $id);

        $this->db->execute();
        
        return $this->db->affectedRows();
    }

    public function ubahData($data)
    {
        $query = "UPDATE siswa SET nama= :nama, kelas= :kelas, jurusan= :jurusan, ttl= :ttl, alamat= :alamat, gender= :gender, hp= :hp, quotes= :quotes WHERE id= :id";

        $this->db->query($query);
        
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('ttl', $data['ttl']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('gender', $data['gender']);
        $this->db->bind('hp', $data['hp']);
        $this->db->bind('quotes', $data['quotes']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->affectedRows();
    }

    public function cariSiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * fROM siswa WHERE nama LIKE :keyword OR kelas LIKE :keyword OR jurusan LIKE :keyword";

        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }

}