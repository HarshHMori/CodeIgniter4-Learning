<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class ManagerEntity extends Entity
{
    // protected $datamap = [
    //     "full_name" => "name",
    //     "email_address" => "email",
    //     "position" => "designation"
    // ];

    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];

    // protected function setEmail(string $email){ //setName | email_address => setEmailAddress
    //     $this->attributes["email"] = str_replace("fake.com", "domain.com", $email);

    //     return $this;
    // }

    // protected function setName(string $name){
    //     $this->attributes["name"] = strtoupper($name);
        
    //     return $this;
    // }

    // protected function setPassword(string $password){
    //     $this->attributes["password"] = password_hash($password, PASSWORD_DEFAULT);

    //     return $this;
    // }

    // // Accessor : change before printing.
    // // Email value

    // protected function getEmail(){ // email : getEmail, email_address : getEmailAddress
    //     return str_replace("yahoo.com", "domain.com", $this->attributes["email"]);
    // }

    // protected function getDesignation(){
    //     return str_replace("SEO", "SEO specialist", $this->attributes["designation"]);
    // }

    // // Virtual function

    // public function getNameEmail(){
    //     return $this->attributes["name"]. ", ".$this->attributes["email"];
    // }

    protected function setPassword(string $password){
        $this->attributes["password"] = password_hash($password, PASSWORD_DEFAULT);
        return $this;
    }
}
