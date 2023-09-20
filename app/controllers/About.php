<?php

class About extends Controller
{
    public function index($nama = 'Sabrina Mauliza Rea', $status = 'Siswa', $umur = 16, $jurusan = 'Rekayasa Perangkat Lunak')
    {
        $data['nama'] = $nama;
        $data['status'] = $status;
        $data['umur'] = $umur;
        $data['jurusan'] = $jurusan;
        $data['judul'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
