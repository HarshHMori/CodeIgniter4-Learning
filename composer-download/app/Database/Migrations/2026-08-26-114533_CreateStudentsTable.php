<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        //Students [id, name, email, age, address, gender, created_at]

        $this->forge->addField([
            "id" => [
                "type" => "INT",
                "constraint" => 11,
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
                "constraint" => 80,
                "null" => false
            ],
            "age" => [
                "type" => "INT",
                "null" => true
            ],
            "address" => [
                "type" => "TEXT",
                "null" => true
            ],
            "gender" => [
                "type" => "ENUM",
                "constraint" => ["male", "female", "other"],
                "default" => "male"
            ],
            "created_at datetime default current_timestamp"
        ]);
        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("students");
    }

    public function down()
    {
        $this -> forge -> dropTable("students");
    }
}
