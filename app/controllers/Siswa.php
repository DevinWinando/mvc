<?php

class Siswa extends Controller{
    public function index()
    {
        $data['judul'] = 'Data Siswa';
        $data['siswa'] = $this->model('Siswa_model')->getSiswa();

        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Data Siswa';
        $data['siswa'] = $this->model('Siswa_model')->getSiswaById($id);

        $this->view('templates/header', $data);
        $this->view('siswa/card', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if($this->model('Siswa_model')->tambahData($_POST) > 0){
            Flasher::setFlash('berhasil', 'tambah', 'success');
            header('location: '.Config::BASEURL. '/siswa');
            exit;
        }else{
            Flasher::setFlash('gagal', 'tambah', 'danger');
            header('location: '.Config::BASEURL. '/siswa');
            exit;
        }
    }

    public function hapus($id)
    {
        if($this->model('Siswa_model')->hapusData($id) > 0){
            Flasher::setFlash('berhasil', 'hapus', 'success');
            header('location: '.Config::BASEURL. '/siswa');
            exit;
        }else{
            Flasher::setFlash('gagal', 'hapus', 'danger');
            header('location: '.Config::BASEURL. '/siswa');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Siswa_model')->getSiswaById($_POST['id']));
    }

    public function ubah()
    {
        if($this->model('Siswa_model')->ubahData($_POST) > 0){
            Flasher::setFlash('berhasil', 'ubah', 'success');
            header('location: '.Config::BASEURL. '/siswa');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ubah', 'danger');
            header('location: '.Config::BASEURL. '/siswa');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Data Siswa';
        $data['siswa'] = $this->model('Siswa_model')->cariSiswa();

        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }
}