<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProductController extends BaseController
{
    public function index($value1, $value2)
    {
        echo "Value :".$value1." and Value 2 :". $value2;
        return view("about-us"); 
    }
}
