<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 45, 
                'unsigned'   => true,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100, 
                'unique'    => true,
                'unsigned'   => true,
            ],
            'usuario' => [
                'type' => 'VARCHAR',
                'constraint' => 45, 
                'unsigned'   => true,
            ],
            'senha' => [
                'type' => 'VARCHAR',
                'constraint' => 255, 
                'unsigned'   => true,
            ],
            'perfil' => [
                'type' => 'VARCHAR',
                'constraint' => 20, 
                'unsigned'   => true,
            ],
            'updated_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
                'default' => null,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('Usuarios');
        
        // **Inserindo dados após criar a tabela**
        $this->db->table('Usuarios')->insert([
            'nome'       => 'Sr(a). Master',
            'email'      => 'admin@admin.com',
            'usuario'    => 'admin',
            'senha'      => password_hash('admin',PASSWORD_DEFAULT),
            'perfil'     => 'admin'
        ]);               
    }

    public function down()
    {
        $this->forge->dropTable('Usuarios');
    }
}
