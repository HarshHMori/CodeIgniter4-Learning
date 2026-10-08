<?php

namespace App\Controllers;
use App\Models\ManagerModel;
use App\Entities\ManagerEntity;
class Site extends BaseController
{

    private $db;

    public function __construct(){
        $this->db = db_connect();
    }

    //custome method to display "Hello Developers" message
    public function welcomePage(){
        return view("welcome-page");
    }

    public function index()
    {
        //Header
        // echo view("include/header");
        echo view("home");

        //footer
        // echo view("include/footer");
    }

    //About us
    public function aboutUs(){
        // echo base_url();
        return view("about-us");
    }

    //Services
    public function services(){
        return view("services");
    }

    public function contactUs(){
        return view("contact-us");
    }

    // public function formSubmit(){

    //     // Check POST Request method
    //     if($this->request->getMethod() == "POST"){
    //         echo "Form Submitted";

    //         exit;
    //     }

    //     // echo $this->request->getMethod();
    //     return view("form");
    // }

    public function formSubmit(){
        return view("form");
    }

    public function nameRoute(){
        echo "<h3>This is the sample message of the Name Route</h3>";
    }

    public function contactUser(){
        echo "<h3>Contact us page</h3>";
    }

    public function projects($value){
        echo "<h3>This is the project page {$value}</h3>";
    }

    public function projectsAlpha($value){
        echo "<h3>This is the alpha value {$value}</h3>";
    }

    public function projectsAlphaNum($value){
        echo "<h3>This is the Alpha Numeric value {$value}</h3>";
    }

    public function projectsAny($value1, $value2, $value3){
        echo "<h3>This is the Any method value {$value1}, {$value2}, {$value3}</h3>";
    }

    public function servicesProject(){
        $all_variables = $this->request->getVar("budget");  //view the query string.
        echo "<pre>";
        print_r($all_variables); 
        echo "this is our services page".$all_variables;
    }

    public function getData(){
        $managerObject = new ManagerModel();
        // $managerObject = model("App\Models\ManagerModel");

        $data = $managerObject->findAll();

        echo "<pre>";
        print_r($data);
    }

    // Insert Command
    public function insertManager(){
        $managerModelObject = new ManagerModel();


        // Insert
        $data = [
            [
                "name" => "Faker User 1",
                "email" => "faker.user1@gmail.com",
                "designation" => "SEO"
            ],
            [
                "name" => "Faker User 2",
                "email" => "faker.user2@gmail.com",
                "designation" => "SEO"
            ],
            [
                "name" => "Faker User 3",
                "email" => "faker.user3@gmail.com",
                "designation" => "SEO"
            ]
        ];

        $manager_id = $managerModelObject->insertBatch($data);
        echo $manager_id;
    }

    public function updateManager(){
        $managerModelObject = new ManagerModel();

        $updated_data = [
            "name" => "Updated name",
            "designation" => "Node Js"
        ];
        

        // 1. Using id
        // $manager_id = 105;

        // 2. using email
        $manager_email = "faker.user2@gmail.com";

        // 1, for the update using only primary key
        // $managerModelObject->update($manager_email, $updated_data);

        // 2. for another column
        // $managerModelObject->Where("email", "faker.user2@gmail.com");
        // $managerModelObject->set($updated_data);
        // $managerModelObject->update();
        // $managerModelObject->Where("email", "faker.user2@gmail.com")->set($updated_data)->update();

        // Update multiple columns data using primary key
        $ids = [100, 102, 103];

        $managerModelObject->update($ids, $updated_data);

        $db = db_connect();
        echo $db->getLastQuery();
    }

    // delete
    public function deleteManager(){
        $managerModelObject = new ManagerModel();

        // case 1 : Primary Key
        // $manager_id = 104;

        // $managerModelObject->delete($manager_id);

        // Case 2 : Using another column
        // $manager_email = "faker.user1@gmail.com";
        // $managerModelObject->Where("email", $manager_email);
        // $managerModelObject->delete();

        // Case 3 : Soft delete-> row in delete state but not actually deleted.
        $manager_email = "ruth56@gmail.com";
        $managerModelObject->Where("email", $manager_email);
        $managerModelObject->delete();

        echo $this->db->getLastQuery();
    }


    // Data Select
    public function getManagers(){
        
        $managerModelObject = new ManagerModel();

        // case 1 : find all data
        // $managers = $managerModelObject->findAll();

        // echo"<pre>";
        // print_r($managers);

        // case 2 : single data on primary key
        // $manager_id = 3;
        // $manager_id = [7, 8, 9];
        // $data = $managerModelObject->select("id, name, email")->find($manager_id);

        // echo "<pre>";
        // print_r($data);

        // case 3 : using another column
        // $data = $managerModelObject->Where("email", "ohegmann@gmail.com")->first();
        // echo "<pre>";
        // print_r($data);

        // $data = $managerModelObject->select("id, name, email")->like("email", "yahoo.com", "before")->findAll();
        // $data = $managerModelObject->select("id, name, email")->Where("id >", 30)->findAll();
        // $data = $managerModelObject->select("id, name, email")->Where("id >", 30)->orLike("email", "yahoo.com", "before")->findAll();
        // $data = $managerModelObject->select("id, name, email")->Where("id >", 30)->like("email", "yahoo.com", "before")->findAll();
        $data = $managerModelObject->orderBy("id", "desc")->findAll();


        echo $this->db->getLastQuery();

        echo "<pre>";
        print_r($data);

    }

    public function getDataEntity(){
        $object = new ManagerModel();

        $data = $object->findAll();

        // echo "<pre>";
        // print_r($data);

        foreach($data as $employee){
            echo "Name: {$employee->full_name}";
            echo "Email: {$employee->email_address}";
            echo "Designation: {$employee->position}";

            echo "<br>";
        }

    }

    // Entity insert

    public function insertDataEntity(){
        $model = new ManagerModel;
        $entity = new ManagerEntity;

        // $data = [
        //     "name" => "Faker Manager 6",
        //     "email" => "fake6@gmail.com",
        //     "designation"=> "PHP"
        // ];

        // $entity->fill($data);

        // $entity->name = "Faker Manager 7";
        // $entity->email = "fake7@gmail.com";
        // $entity->designation = "Web Developer";

        // $entity->full_name = "Sample Manager 100";
        // $entity->email_address = "samplemanager100@gmail.com";
        // $entity->position = "Stack Developer";

        // faker@faker.com => faker@domain.com (changing the email domain)
        $entity->name = "Fake Manager 102";
        $entity->email = "fake.manager102@fake.com";
        $entity->designation = "Java";
        $entity->password = "123456";

        $model->save($entity); 

    }

    // Accessor

    public function getDataAccessor(){
        $object = new ManagerModel;

        $data = $object->findAll();

        foreach($data as $employee){
            echo "Name: {$employee->name}, Email: {$employee->email}, Designation: {$employee->designation}";
            echo "<br/><br/>";
            echo "";
        }
    }


    // Virtual Properties
    public function getDataVirtual(){
        $modelObject = new ManagerModel;

        // Data select 
        $data = $modelObject->findAll();

        // echo "<pre>";
        // print_r($data);

        foreach($data as $manager){
            // echo "Name: {$manager->name}, Email: {$manager->email}, Designation: {$manager->designation}";
            
            echo "BIO : ".$manager->getNameEmail();

            echo "<br/><br/>";
        }
        
    }
}
