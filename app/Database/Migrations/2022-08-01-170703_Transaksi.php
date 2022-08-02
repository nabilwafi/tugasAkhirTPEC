<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
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
            'id_customer' => [
                'type' => 'INT',
                'unsigned' => true,
                'constraint' => 5,
            ],
            'id_company' => [
                'type' => 'INT',
                'unsigned' => true,
                'constraint' => 5,
            ],
            'id_courier' => [
                'type' => 'INT',
                'unsigned' => true,
                'constraint' => 5,
            ],
            'nama_device' => [
                'type' => 'INT',
                'constraint' => 150,
            ],
            'keluhan' => [
                'type' => 'TEXT',
            ],
            'ppn' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'total_harga' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'bukti_pembayaran' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => true
            ],
            'status_transaksi' => [
                'type' => 'ENUM',
                'constraint' => ['belum bayar', 'menunggu verifikasi', 'pembayaran diterima', 'device dalam proses', 'device selesai diperbaiki', 'transaksi selesai'],
                'default' => 'belum bayar'
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);

        $this->forge->addForeignKey('id_customer', 'customers', 'id', 'cascade', 'cascade');
        $this->forge->addForeignKey('id_company', 'companies', 'id', 'cascade', 'cascade');
        $this->forge->addForeignKey('id_courier', 'couriers', 'id', 'cascade', 'cascade');
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('transactions');
    }

    public function down()
    {
        $this->forge->dropTable('transactions');
    }
}
