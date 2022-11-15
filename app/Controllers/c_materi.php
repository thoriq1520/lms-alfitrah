<?php

namespace App\Controllers;

use App\Models\m_materi;
class c_materi extends BaseController
{
    protected $materiModel;
    public function __construct()
    {
        $this->materiModel = new m_materi();
    }

    public function input_mahasiswa()
    {
        if (!session()->get('login')) {
            return redirect()->route('');
        }

        $data = [
            'nama_mapel' => $this->request->getVar('nama_mapel'),
            'kelas' => $this->request->getVar('kelas'),
            'judul_materi' => $this->request->getVar('judul_materi'),
            'link_materi' => $this->request->getVar('link_materi'),
        ];
        //        dd($this->request->getVar());
        $result = $this->materiModel->post_materi($data);

        if ($result) {
            session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
            return redirect()->route('mahasiswa');
        }
    }
}


?>