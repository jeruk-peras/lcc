<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_transaksi' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'no_transaksi' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'tanggal' => [
                'type'       => 'DATETIME',
            ],
            'total_harga' => [
                'type'       => 'double',
            ],
            'karyawan_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
        ]);
        $this->forge->addKey('id_transaksi', true);
        $this->forge->addForeignKey('karyawan_id', 'karyawan', 'id_karyawan', 'CASCADE', 'RESTRICT');
        $this->forge->createTable('transaksi');
    }
    
    public function down()
    {
        //
    }
}
