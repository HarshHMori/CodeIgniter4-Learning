<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        for($i = 0; $i < 500; $i++){
            $data[] = $this->generateFakeStudent();
        }
        $this->db->table("students")->insertBatch($data);
    }

    private function generateFakeStudent(){
        $fakerObject = Factory::create();
        return [
            "name" => $fakerObject->name(),
            "email" => $fakerObject->email(),
            "age" => $fakerObject->numberBetween(22, 35),
            "address" => $fakerObject->address(),
            "gender" => $fakerObject->randomElement(["male", "female", "other"])
        ];
        
    }
}
