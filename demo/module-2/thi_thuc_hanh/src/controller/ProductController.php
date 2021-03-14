<?php

namespace App\controller;
use App\model\connectDB;
use App\model\Product;

class ProductController
{
    protected $data;

    public function __construct()
    {
        $this->data = new connectDB();
    }

    public function getAll()
    {
        $products = $this->data->all();
        include_once('src/view/list.php');
    }

    public function createProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include('src/view/create.php');
        } else {
            $productCode = $_POST['productCode'];
            $name = $_POST['name'];
            $category = $_POST['category'];
            $price = $_POST['price'];
            $amount = $_POST['amount'];
            $date = $_POST['date'];
            $description = $_POST['description'];
            $product = new Product($productCode, $name, $category, $price, $amount, $date, $description);
            $this->data->create($product);
            header('location: index.php');
        }
    }
}

