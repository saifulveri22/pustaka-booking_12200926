<?php

namespace App\Database\Seeds;

use App\Models\Pengguna12200926;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder12200926 extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'      => 'Saiful Veri',
                'password'  => md5('12200926')
            ],
            [
                'nama'      => 'admin',
                'password'  => md5('12345')
            ],
            [
                'nama'      => '12200926',
                'password'  => md5('saifulveri')
            ]
        ];

        $p = new Pengguna12200926();
        $p->insertBatch($data);
    }
}