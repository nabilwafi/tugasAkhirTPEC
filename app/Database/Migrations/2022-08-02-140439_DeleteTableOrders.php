<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DeleteTableOrders extends Migration
{
    public function up()
    {
        $this->forge->dropColumn('orders', ['ppn', 'total_harga', 'bukti_pembayaran', 'status_transaksi', 'created_at']);
    }

    public function down()
    {
        //
    }
}
