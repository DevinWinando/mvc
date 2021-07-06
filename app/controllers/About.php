<?php

class About extends Controller{
    public function index($nama = 'Devin', $profesi = 'pelajar')
    {
        $data['nama'] = $nama;
        $data['profesi'] = $profesi;
        $data['judul'] = 'About';
        
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
        
    }
    public function page(){
        $data['judul'] = 'Pages';
        
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}