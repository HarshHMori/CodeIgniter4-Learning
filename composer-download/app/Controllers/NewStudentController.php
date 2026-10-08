<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class NewStudentController extends BaseController
{
    private $db;
    public function __construct() {
        $this->db = db_connect(); // Database Object
    }
    public function getData()
    {
        // Table  Object
        // $tableObject = $this->db->table("students");
        // $tableObject->select("id, name, email");
        // $tableObject->where("id", 3);
        // $query = $tableObject->get();
        // $data = $query->getRowArray();

        // $data = $this->db->table("students")->select("id, name, email")->where("id", 3)->get()->getRowArray();
        // echo $this->db->getLastQuery();
        // echo "<pre>";
        // print_r($data);

        $tableObject = $this->db->table("students");
        $tableObject->select("id, name, email");
        
        // case : 1 id < 10
        // $tableObject->where("id <", 10);
        
        // case : 2 id IN [2,3,5,7,9,10]
        // $tableObject->whereIn("id", array(2 , 3, 5, 7, 9, 10));

        // case : 3 id = 2 AND email = buck.quitzon@gmail.com
        // $tableObject->Where("id", 2);
        // $tableObject->Where("email", "buck.quitzon@gmail.com");
        // $tableObject->where([
        //     "id" => 2,
        //     "email" => "buck.quitzon@gmail.com"
        // ]);

        // case : 4 id < 10 OR email = ptorp@grant.com
        // $tableObject->Where("id <", 10);
        // $tableObject->orWhere("email", "ptorp@grant.com");

        // case : 5 email contains sub string "morar"
        // $tableObject->like("email", "morar");

        // case : 6 email contains sub string "yahoo.com" at last of string
        $tableObject->like("email", "glynch", "after");
 
        $query = $tableObject->get();
        $data = $query->getResultArray();
        
        echo $this->db->getLastQuery();
        echo "<pre>";
        print_r($data);
    }

    public function insertData(){
        // Student data
        // $data = [
        //     [
        //         "name" => "User 1",
        //         "email" => "user1@gmail.com",
        //         "age" => 25,
        //         "gender" => "male",
        //         "address" => "Sample location"
        //     ],
        //     [
        //         "name" => "User 2",
        //         "email" => "user2@gmail.com",
        //         "age" => 25,
        //         "gender" => "male",
        //         "address" => "Sample location"
        //     ]
        // ];

        $data = [
            "name" => "User 3",
            "email" => "user3@gmail.com",
            "age" => 25,
            "gender" => "male",
            "address" => "Sample location"
        ];
        // Table object
        $tableObject = $this->db->table("students");
        $tableObject->insert($data);

        echo $this->db->insertID(); //last inserted row id.
    }

    // Update data
    public function updateData(){

        // Table object
        $tableObject = $this->db->table("students");
        // $tableObject->update(array(
        //     "email" => "sample.updated@gmail.com"
        // ), array(
        //     "id" => 2
        // ));

        $tableObject->Where("id", 2);
        $tableObject->update(array(
            "email" => "sample2.updated@gmail.com"
        ));
    }

    public function deleteData(){
        $tableObject = $this->db->table("students");

        // $tableObject->delete([
        //     "id" => 504
        // ]);

        // $tableObject->Where("id", 503);
        // $tableObject->delete();

        // Empty table - new data starting from that id in continuation
        // $tableObject->emptyTable();

        // Truncate method - after deleting all data the new data add from first
        $tableObject->truncate();

    }

    
}