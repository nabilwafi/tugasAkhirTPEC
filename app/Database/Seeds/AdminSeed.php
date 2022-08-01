<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeed extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'Admin',
            'email' => 'admin@admin',
            'password' => '12345678'
        ];

        $this->db->table('admin')->insert($data);
    }
}
