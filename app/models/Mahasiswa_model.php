<?php

class Mahasiswa_model{

    private $table = 'mahasiswa';
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getAllMhs(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMhsByID($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function insert($data){
        $query = "INSERT INTO mahasiswa VALUES ('', :nama, :umur, :jurusan)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('umur', $data['umur']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function delete($id){
        $query = "DELETE FROM mahasiswa WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();

    }


    public function update($data)
    {
        $query = "UPDATE mahasiswa SET 
                    nama = :nama,
                    umur = :umur,
                    jurusan = :jurusan
                    WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('umur', $data['umur']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);
        echo 'abcdefg';
        $this->db->execute();

        return $this->db->rowCount();
    }


    public function search($keyword){
        
        $query = "SELECT * FROM mahasiswa
                    WHERE nama LIKE :keyword OR jurusan LIKE :keyword";

        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();

    }

}