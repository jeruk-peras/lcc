<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransaksiDetail extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_detail' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'transaksi_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'menu_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'jumlah' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'harga' => [
                'type'       => 'double',
            ],
        ]);
        $this->forge->addKey('id_detail', true);
        $this->forge->addForeignKey('transaksi_id', 'transaksi', 'id_transaksi', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('menu_id', 'menu', 'id_menu', 'CASCADE', 'RESTRICT');
        $this->forge->createTable('transaksi_detail');
    }

    public function down()
    {
        //
    }
}
