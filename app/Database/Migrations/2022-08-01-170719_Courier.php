<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Courier extends Migration
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
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'harga' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('couriers');
    }

    public function down()
    {
        $this->forge->dropTable('couriers');
    }
}
