<?php

namespace App\model;

class connectDB
{
    protected $data;

    public function __construct()
    {
        $db = new procdutDB();
        $this->data = $db->connect();
    }

    public function all()
    {
        $sql = "select * from products";
        $stmt = $this->data->query($sql);
        return $stmt->fetchAll();
    }

    public function create($product)
    {
        
        $sql = "insert into products (productCode, name, category, price, amount, date, description) values (:productCode, :name, :category, :price, :amount, :date, :description)";
        $stmt = $this->data->prepare($sql);
        $stmt->bindParam(':productCode', $product->getProductCode());
        $stmt->bindParam(':name', $product->getName());
        $stmt->bindParam(':category', $product->getCategory());
        $stmt->bindParam(':price', $product->getPrice());
        $stmt->bindParam(':amount', $product->getAmount());
        $stmt->bindParam(':date', $product->getDate());
        $stmt->bindParam(':description', $product->getDescription());
        var_dump($stmt);
        $stmt->execute();
    }
}

