<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEmployeeTable extends Migration
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
            "name" => [
                "type" => "VARCHAR",
                "constraint" => 50,
                "null" => false
            ],
            "email" => [
                "type" => "VARCHAR",
                "constraint" => 50,
                "null" => false
            ],
            "age" => [
                "type" => "INT",
                "constraint" => 5,
                "null" => false
            ],
            "designation" => [
                "type" => "VARCHAR",
                "constraint" => 50,
                "null" => true
            ],
            "created_at datetime default current_timestamp"
        ]);
        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("employees");
    }

    public function down()
    {
        $this->forge->dropTable("employees");
    }
}
