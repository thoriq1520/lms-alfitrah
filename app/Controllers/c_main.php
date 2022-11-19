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

    public function login()
    {

        echo view('v_login');
    }
    public function kelas()
    {
        $data['content_view'] = "v_kelas";
        $data['mapel'] = $this->mapelModel->get_mapel();
        echo view('v_template', $data);
    }
    public function mapel()
    {
        $data['content_view'] = "v_mapel";
        $data['mapel'] = $this->mapelModel->get_mapel();
        echo view('v_template', $data);
    }
    public function pdf()
    {
        $data['content_view'] = "v_bacaMateri";
        // $data['mapel'] = $this->mapelModel->get_mapel();
        echo view('v_template', $data);
    }
}


?>