<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ChangeOrderTableToTransactions extends Migration
{
    public function up()
    {
        $fields = [
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
        ];

        $this->forge->renameTable('orders', 'transactions');
        $this->forge->addColumn('transactions', $fields);
    }

    public function down()
    {
        //
    }
}
