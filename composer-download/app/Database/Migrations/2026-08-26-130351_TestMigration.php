<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TestMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type" => "INT",
                "constraint" => 10,
                "auto_increment" => true,
                "unsigned" => true
            ],
            "name" => [
                "type" => "VARCHAR",
                "constraint" => 30,
                "null" => false
            ],
            "age" => [
                "type" => "INT",
                "null" => true
            ],
            "created_at datetime default current_timestamp"
        ]);

        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("test");
    }

    public function down()
    {
        $this->forge->dropTable("test");
    }
}
