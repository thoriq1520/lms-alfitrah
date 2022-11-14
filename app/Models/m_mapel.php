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
}
