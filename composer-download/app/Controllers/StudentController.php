<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class StudentController extends BaseController
{
    private $db;
    public function __construct(){
        $this->db = db_connect();
        // $this->db = \Config\Database::connect();
    }
    public function insertData()
    {
        $sql = "INSERT INTO students (name, email, age, address, gender) VALUES ('Sample User 100', 'sample.user100@gmail.com', 25, 'Sample Location', 'female')";
        $this->db->query($sql);
    }

    public function updateData(){
        $sql = "UPDATE students SET name = 'Sample User 101', email = 'sample.user101@gmail.com' WHERE id = 500";
        $this->db->query($sql);
    }

    public function deleteData(){
        $sql = "DELETE FROM students WHERE id = 496";
        $this->db->query($sql);
    }

    public function selectData(){
        $sql = "SELECT * FROM students WHERE id = 6";
        $data = $this->db->query($sql)->getRowObject();
        // All Data : getResultArray() -> getResult('array')
        // Single Data : getRow() -> getRowArray()
        echo "<pre>";
        print_r($data);
    }
}
