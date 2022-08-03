<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateTransactions extends Migration
{
    public function up()
    {
        $this->forge->renameTable('transactions', 'orders');
    }
    
    public function down()
    {
        
    }
}
