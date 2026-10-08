<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TestUrl extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type" => "INT",
                "constraint" => 5,
                "auto_increment" => true,
                "unsigned" => true
            ],
            "long_url" => [
                "type" => "VARCHAR",
                "constraint" => 150,
                "null" => false,
            ],
            "shortcode" => [
                "type" => "VARCHAR",
                "constraint" => 6,
                "null" => false
            ]
        ]);

        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("urls");

    }

    public function down()
    {
        $this->forge->dropTable("urls");
    }
}
