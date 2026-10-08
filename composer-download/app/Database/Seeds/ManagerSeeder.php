<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class ManagerSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 100; $i++){
            $data[] = $this->generateFakeManagers();
        }

        $this->db->table("managers")->insertBatch($data);
    }

    private function generateFakeManagers(){
        $fakerObject = Factory::create();

        $designation = [
            "PHP Developer",
            "Bidder",
            "SEO",
            "Web Developer",
            "Web Designer",
            "Python",
            "Java"
        ];

        return [
            "name" => $fakerObject->name(),
            "email" => $fakerObject->email(),
            "designation" => $fakerObject->randomElement($designation)
        ];
    }
}
