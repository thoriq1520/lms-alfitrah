<?php

namespace App\Models;

use CodeIgniter\Model;

class m_mapel extends Model
{

    protected $table = 'mapel';
    protected $primaryKey = 'id';

    function get_mapel($kelas)
    {
        $db = \Config\Database::connect();
        $mapel = $db->query("SELECT * FROM mapel where kelas='$kelas'");

        $data =  [
            'mapel' => $mapel
        ];
        return $data['mapel'];
    }

    function get_mapel_1($kelas, $nama_mapel)
    {
        $mapel = $this->where([
            'nama' => $nama_mapel,
            'kelas' => $kelas,
        ])->first();
        return $mapel;
    }
}
