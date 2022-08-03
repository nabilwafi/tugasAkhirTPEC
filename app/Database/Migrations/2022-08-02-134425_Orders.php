<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orders extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_order' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true
            ],
            'ppn' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'total_harga' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'bukti_pembayaran' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'status_transaksi' => [
                'type' => 'ENUM',
                'constraint' => ['belum bayar', 'menunggu verifikasi', 'pembayaran diterima', 'device dalam proses', 'device selesai diperbaiki', 'transaksi selesai'],
                'default' => 'belum bayar'
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('id_order', 'orders', 'id', 'cascade', 'cascade');
        $this->forge->createTable('transactions');
    }

    public function down()
    {
        $this->forge->dropTable('transactions');
    }
}
