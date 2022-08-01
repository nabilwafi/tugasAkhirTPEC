<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Company extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'jenis_devices' => [
                'type' => 'ENUM',
                'constraint' => ['handphone', 'laptop', 'pc', 'printer'],
            ],
            'harga' => [
                'type' => 'VARCHAR',
                'constraint' => 150
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 150
            ],
            'alamat' => [
                'type' => 'TEXT',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('companies');
    }

    public function down()
    {
        $this->forge->dropTable('companies');
    }
}
