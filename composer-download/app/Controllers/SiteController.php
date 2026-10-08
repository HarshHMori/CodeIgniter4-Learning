<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SiteController extends BaseController
{
    private $db;
    public function __construct(){
        $this->db = db_connect();
    }
    // Inner Join 
    public function getDataInnerJoin(){

        // Table object
        $managerTableObject = $this->db->table("managers as man");

        $managerTableObject->select("
            man.name as manager_name,
            man.email as manager_email,
            man.designation as manager_designation,
            pro.title as project_title,
            pro.budget as project_budget
        ");

        // Join 
        $managerTableObject->join("projects as pro", "pro.manager_id = man.id");

        // Query
        $Query = $managerTableObject->get();

        // Data
        $data = $Query->getResult();

        echo "<pre>";
        print_r($data);
    }

    // left join
    public function getDataLeftJoin(){
        $managerTableOffset = $this ->db->table("managers as man");

        $managerTableOffset->select("
            man.name as manager_name,
            man.email as manager_email,
            man.designation as manager_designation,
            pro.title as project_title,
            pro.budget as project_budget
        ");

        // Join
        $managerTableOffset->join("projects as pro", "man.id = pro.manager_id", "left");

        // Query
        $query = $managerTableOffset->get();

        // Data 
        $data = $query->getResultArray();

        echo $this->db->getLastQuery();
        echo "<pre>";
        print_r($data);

    }

    // Right Join
    public function getDataRightJoin(){
        $managerTableOffset = $this->db->table("managers as man");

        $managerTableOffset->select("
            man.name as manager_name,
            man.email as manager_email,
            man.designation as manager_designation,
            pro.title as project_title,
            pro.budget as project_budget
        ");

        // Join
        $managerTableOffset->join("projects as pro", "pro.manager_id = man.id", "right");

        // Query
        $Query = $managerTableOffset->get();

        // Data
        $data = $Query->getResultArray();

        echo $this->db->getLastQuery();
        echo "<pre>";
        print_r($data);
    }
}
