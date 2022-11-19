<?php

namespace App\Controllers;

use App\Models\m_materi;
use App\Models\m_mapel;
class c_materi extends BaseController
{
    protected $materiModel;
    protected $mapelModel;
    public function __construct()
    {
        $this->materiModel = new m_materi();
        $this->mapelModel = new m_mapel();
    }

    public function materi($kelas, $mapel)
    {
        $data['content_view'] = "v_materi";
        $data['materi'] = $this->materiModel->get_materi($kelas,$mapel);
        $data['kelas'] = $kelas;
        $data['mapel'] = $mapel;
        echo view('v_template', $data);
    }

    public function post_materi()
    {
        $data = [
            'nama_mapel' => $this->request->getVar('nama_mapel'),
            'kelas' => $this->request->getVar('kelas'),
            'judul_materi' => $this->request->getVar('judul_materi'),
            'link_materi' => $this->request->getVar('link_materi'),
        ];
        $result = $this->materiModel->post_materi($data);

        if ($result) {
            session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
            return redirect()->route('home');
        }
    }
}


?>