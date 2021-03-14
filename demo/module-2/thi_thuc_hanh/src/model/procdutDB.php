<?php
namespace App\model;

use Exception;
use PDO;

class procdutDB
{
    protected $dsn;
    protected $user;
    protected $pass;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=module2";
        $this->user = "root";
        $this->pass = "123456@";
    }

    public function connect()
    {
        try {
            return new Pdo($this->dsn, $this->user, $this->pass);
        } catch (Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }
}

