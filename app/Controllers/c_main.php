<?php

namespace App\Controllers;

use App\Models\m_mapel;
use App\Models\m_materi;
class c_main extends BaseController
{
    protected $mapelModel;
    protected $materiModel;
    public function __construct()
    {
        $this->mapelModel = new m_mapel();
        $this->materiModel = new m_materi();
    }
    public function display()
    {
        $data['content_view'] = "v_index";
        $data['mapel'] = $this->mapelModel->get_mapel();
        echo view('v_template', $data);
    }
    
    public function post_mapel(){
        $nama = $this->request->getVar('nama');
        $result = $this->mapelModel->post_mapel($nama);
        if ($result) {
            session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
            return redirect()->route('home');
        }

    }

    public function login()
    {

        echo view('v_login');
    }
    public function kelas($kelas)
    {
        $data['content_view'] = "v_kelas";
        $data['mapel'] = $this->mapelModel->get_mapel();
        $data['kelas'] = $kelas;
        echo view('v_template', $data);
    }

}


?>