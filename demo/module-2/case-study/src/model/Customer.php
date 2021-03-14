<?php

namespace App\model;

class Customer
{
    public $id;
    public $name;
    public $dob;
    public $image;

    public function __construct($name, $dob, $image)
    {
        $this->name = $name;
        $this->dob = $dob;
        $this->image = $image;
    }

    public function getid()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getname()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDob()
    {
        return $this->dob;
    }

    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }
}

