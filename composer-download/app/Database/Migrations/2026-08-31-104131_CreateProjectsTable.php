<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProjectsTable extends Migration
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
            "manager_id" => [
                "type" => "INT",
                "null" => false
            ],
            "title" => [
                "type" => "VARCHAR",
                "constraint" => 50,
                "null" => false
           ],
            "budget" => [
                "type" => "INT",
                "constraint" => 5,
                "null" => true
            ]
        ]);

        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("projects");

    }

    public function down()
    {
        $this->forge->dropTable("projects");
    }
}
