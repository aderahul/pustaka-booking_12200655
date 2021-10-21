<?php
namespace App\Database\Seeds;

use App\Models\PenggunaModel_12200655;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder_12200655 extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'        => 'Aderahul',
                'password'    => md5('12200655')
            ],
            [
                'nama'        => 'admin',
                'password'    => md5('12345')
            ],
            [
                'nama'        => '12200655_aderahul',
                'password'    => md5('aderahul')
            ]
        ];

        $p = new PenggunaModel_12200655();
        $p->insertBatch($data);
    }
}
