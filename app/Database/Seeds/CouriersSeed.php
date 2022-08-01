<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CouriersSeed extends Seeder
{
    public function run()
    {
        $datas = [
            [
                'name' => 'JNE',
                'harga'    => '20000',
            ],
            [
                'name' => 'SICEPAT',
                'harga' => '11000'
            ],
            [
                'name' => 'NINJA',
                'harga' => '15000'
            ]
        ];

        foreach($datas as $data) {
            // Using Query Builder
            $this->db->table('couriers')->insert($data);
        }
    }
}
