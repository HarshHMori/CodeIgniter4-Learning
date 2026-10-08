<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateManagersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type"=>"INT",
                "contstraint"=>5,
                "auto_increment"=>true,
                "unsigned"=>true
            ],
            "name" => [
                "type" => "VARCHAR",
                "constraint" => 50,
                "null" => false
            ],
            "email" => [
                "type" => "VARCHAR",
                "constraint" => 80,
                "null" => false,

            ],
            "designation" => [
                "type" => "VARCHAR",
                "constraint" => 50,
                "null" => true,
            ],
            "created_at datetime default current_timestamp"
        ]);

        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("managers");
    }

    public function down()
    {
        $this->forge->dropTable("managers");
    }
}
