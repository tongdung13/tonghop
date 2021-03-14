<?php
namespace App\controller;
use App\model\CustomerDB;
use App\model\Customer;


class CustomerController
{
    protected $data;

    public function __construct()
    {
        $this->data = new CustomerDB();
        
    }

    public function getAll()
    {
        $customers = $this->data->all();
        include_once("src/view/list.php");
    }

    public function add()
    {
        if($_SERVER['REQUEST_METHOD'] == 'GET') 
        {
            include_once "src/view/add.php";
        } else {
            $name = $_REQUEST['name'];
            $dob  = $_REQUEST['dob'];
            $image = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($image_tmp, 'images/'. $image);

            $customer = new Customer($name, $dob, $image);
            $this->data->create($customer);
            header('location: index.php');
        }
    }

    public function delete($id)
    {
        if($_REQUEST['id']) {
            $this->data->destroy($id);
        }
        header('location: index.php');
    }
}

