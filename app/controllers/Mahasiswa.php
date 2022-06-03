<?php

class Mahasiswa extends Controller{
    public function index(){
        $data['judul'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMhs();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMhsByID($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah(){
        if($this->model('Mahasiswa_model')->insert($_POST) > 0){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
        }
        else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
        }
        header('Location: ' . BASE_URL . '/mahasiswa');
        exit;
    }

    public function hapus($id)
    {
        if ($this->model('Mahasiswa_model')->delete($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
        }
        header('Location: ' . BASE_URL . '/mahasiswa');
        exit;
    }
}