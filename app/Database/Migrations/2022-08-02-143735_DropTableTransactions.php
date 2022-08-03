<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DropTableTransactions extends Migration
{
    public function up()
    {
        $this->forge->dropTable('transactions');
    }

    public function down()
    {
        //
    }
}
