<?php

class Mahasiswa_model{
    // private $mhs = 
    // [
    //     [
    //         "nama" => "Brayan",
    //         "umur" => 20,
    //         "jurusan" => "CompSci"
    //     ],
    //     [
    //         "nama" => "Alpha",
    //         "umur" => 19,
    //         "jurusan" => "CompSci"
    //     ],
    //     [
    //         "nama" => "Delta",
    //         "umur" => 18,
    //         "jurusan" => "CompSci"
    //     ]
    // ];

    // database handler

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
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}