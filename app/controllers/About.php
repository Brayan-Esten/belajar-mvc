<?php

class About extends Controller{
    public function index($nama = 'Brayan', $umur = 20, $jurusan = 'CompSci'){

        $data['nama'] = $nama;
        $data['umur'] = $umur;
        $data['jurusan'] = $jurusan;
        $data['judul'] = 'About Me';

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page(){

        $data['judul'] = 'About Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}