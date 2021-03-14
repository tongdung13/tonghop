<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content_Type" content="text/html; charset=utf-8">
    <title>Log In</title>
    <style>
        .login {
          height:180px; width:230px;
          margin:0;
          padding:10px;
          border:1px #CCC solid;
          margin-left: 38%;
          margin-top: 15%;
    }
    .login input {
          padding:5px; margin:5px
    }
    </style>
</head>
<body>
    <form method="POST">
        <div class="login">
            <h2>Log In</h2>
            <input class="form-control" type="text" name="username" placeholder="username">
            <input class="form-control" type="password" name="password" placeholder="password">
            <input type="submit" value="login" id="login">
        </div>
    </form>
    <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($username == 'admin' && $password == '1'){
                echo "<h2>Welcome <span style='color:red'>" .$username. "</span> to website</h2>"; 
            } else {
                echo "<h2><span style='color:red'> ban nhap sai vui long nhap lai </span></h2>";
            }
        }
    ?>
</body>
</html>