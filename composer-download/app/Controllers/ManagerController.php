<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ManagerModel;
use App\Entities\ManagerEntity;


class ManagerController extends BaseController
{
    public function index()
    {
        // echo $this->request->getMethod();
        // Check for POST request type
        if($this->request->getMethod() == "POST"){
            // Form submitter
            $name = $this->request->getVar("name");
            $email = $this->request->getVar("email");
            $designation = $this->request->getVar("designation");
            $password = $this->request->getVar("password");

            // Manager Model Object
            $modelObject = new ManagerModel();
            $entityObject = new ManagerEntity;
            
            $entityObject->name = $name;
            $entityObject->email = $email;
            $entityObject->designation = $designation;
            $entityObject->password = $password;

            $modelObject->save($entityObject);

            // echo "Manager created successfully";

            $session = session();
            $session->setFlashdata("success", "Manager created successfully");

            return redirect()->to(base_url("add-manager"));
        }
        return view("add-manager");
    }

    public function addManager(){

        // helper("form");

        return view("create-manager");
    }
}
