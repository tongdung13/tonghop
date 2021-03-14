<?php

namespace App\model;

class customerDB
{
    protected $con;

    public function __construct()
    {
        $db = new ConnectDb();
        $this->con = $db->connect();
    }

    public function all()
    {
        $sql = "select * from customers";
        $stmt = $this->con->query($sql);
        return $stmt->fetchAll();
    }

    public function create($customer)
    {
        $sql = "insert into customers(name, dob, image) values (:name, :dob, :image)";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':name', $customer->getName());
        $stmt->bindParam(':dob', $customer->getDob());
        $stmt->bindParam(':image', $customer->getImage());
        $stmt->execute(); 
    }

    public function getById($id)
    {
        $sql = "select * from customers where id = :id";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function destroy($id) {
        $sql = "delete from customers where id = :id";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}

