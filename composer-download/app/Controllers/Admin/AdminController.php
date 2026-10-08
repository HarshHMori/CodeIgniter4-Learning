<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function list()
    {
        echo "<h3>List page</h3>";
    }
    public function add()
    {
        echo "<h3>Add page</h3>";
    }
    public function update()
    {
        echo "<h3>Update page</h3>";
    }
    public function delete()
    {
        echo "<h3>Delete page</h3>";
    }
}
