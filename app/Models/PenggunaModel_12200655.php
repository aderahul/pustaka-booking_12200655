<?php

namespace App\Models;

use CodeIgniter\Model;
use PhpParser\Node\Scalar\String_;

class PenggunaModel_12200655 extends Model
{
    protected $DBGroup              = 'koneksiku';
    protected $table                = 'pengguna_12200655';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $returnType           = 'array';
    protected $protectFields        = true;
    protected $allowedFields        = ['nama', 'password'];

    /**
     * method untuk cek login dari table pengguna_12200655
     * berdasarkan nama dan password
     * @var String $user
     * @var String pass
     */
    public function cekLogin($user, $pass){
        return $this->where('nama', $user)
                    ->where('password', md5($pass) )->first();
    }

}
