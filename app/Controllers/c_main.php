<?php

namespace App\Controllers;

use App\Models\m_mapel;
class c_main extends BaseController
{
    protected $mapelModel;
    public function __construct()
    {
        $this->mapelModel = new m_mapel();
    }
    public function display()
    {
        $data['content_view'] = "v_index";
        echo view('v_template', $data);
    }
    public function kelas()
    {
        $data['content_view'] = "v_kelas";
        $data['mapel'] = $this->mapelModel->get_mapel();
        echo view('v_template', $data);
    }
}
?>