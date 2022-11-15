<?php

namespace App\Models;

use CodeIgniter\Model;

class m_materi extends Model
{

    protected $table = 'materi';
    protected $primaryKey = 'id_materi';

    function get_materi()
    {
        $db = \Config\Database::connect();
        $materi = $db->query("SELECT * FROM materi");

        $data =  [
            'materi' => $materi
        ];
        return $data['materi'];
    }

    function post_materi($data)
    {
        $nama_mapel = $data['nama_mapel'];
        $kelas = $data['kelas'];
        $judul_materi = $data['judul_materi'];

        $rand = rand();
        $filename = $_FILES['link_materi']['name'];
        move_uploaded_file($_FILES['link_materi']['tmp_name'], $kelas.'/'.$nama_mapel.'/'.$rand.'_'.$filename);
		$file_materi = $rand.'_'.$filename;

        $db = \Config\Database::connect();
        $result = $db->query("insert into materi (id_materi,nama_mapel, kelas, judul_materi, link_materi) values('1','$nama_mapel', '$kelas', '$judul_materi','$file_materi')");

        return $result;
    }
}
