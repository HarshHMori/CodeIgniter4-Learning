<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        $projects = [];
        for($i = 1; $i <= 50; $i++){
            $projects[] = $this->generateFakeProject();
        }
        $this->db->table("projects")->insertBatch($projects);
    }

    private function generateFakeProject(){
        $fakerObject = Factory::create();

        return [
            "manager_id" => $fakerObject->randomElement(
                $this->db->table("managers")->select("id")->orderBy("rand()")->get()->getRowArray()
            ),
            "title" => $fakerObject->name(),
            "budget" => $fakerObject->numberBetween(400, 20000)
        ];
    }
}
