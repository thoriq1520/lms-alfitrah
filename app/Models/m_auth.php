<?php

namespace App\Models;

use CodeIgniter\Model;

class m_auth extends Model
{

    protected $table = 'user';
    protected $primaryKey = 'username';

    function cek_username($username){
        $dataUser = $this->where([
            'username' => $username,
        ])->first();
        return $dataUser;
        }
}
