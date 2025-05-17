<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Menu extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_menu' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'nama_menu' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'harga' => [
                'type'       => 'DOUBLE',
            ],
            'status' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'kategori_id' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
        ]);
        $this->forge->addKey('id_menu', true);
        $this->forge->addForeignKey('kategori_id','kategori','id_kategori', 'CASCADE', 'RESTRICT');
        $this->forge->createTable('menu');
    }

    public function down()
    {
        //
    }
}
