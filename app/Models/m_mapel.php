<?php

namespace App\Models;

use CodeIgniter\Model;

class m_mapel extends Model
{

    protected $table = 'mapel';
    protected $primaryKey = 'id';

    function get_mapel()
    {
        $db = \Config\Database::connect();
        $mapel = $db->query("SELECT * FROM mapel");

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

    function post_mapel($data)
    {
        $db = \Config\Database::connect();
        $nama = $data;
        $data = $db->query("SELECT max(id) FROM mapel");
        foreach ($data->getResultArray() as $m) :
            $id = $m['max(id)'];
        endforeach;
        $urutan = (int) substr($id, 3, 4);
        $urutan++;
        $id = 'pel' . $urutan;
        
        $result = $db->query("insert into mapel values('$id','$nama')");
        return $result;

    }
}
