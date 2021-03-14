<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <div>
    <a href="?page=list" class="btn btn-outline-success">Customer</a>
    <a href="?page=add" class="btn btn-outline-success">Add</a>
    </div>
    <form method="post" enctype="multipart/form-data" action="?page=search" class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>


<?php 
    require_once __DIR__ . "/vendor/autoload.php";
    use App\controller\CustomerController;

    $customer = new CustomerController();
    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';

    switch($page) {
        case 'list':
            $customer->getAll();
            break;
        case 'add':
            $customer->add();
            break;
        case 'delete':
            $id = $_REQUEST['id'];
            $customer->delete($id);
            break;
        default:
            $customer->getAll();
    }
?>
</body>
</html>

