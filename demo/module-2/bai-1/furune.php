<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Furune</title>
    <style> 
        input[type=number] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc; 
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }
        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
        <form method="POST">
            <input class="form-control" type="number" name="dt" placeholder="so tien dau tu">
            <input class="form-control" type="number" name="ls" placeholder="lai suat">
            <input class="form-control" type="number" name="sn" placeholder="so nam dau tu">
            <input type="submit" id="submit" value="result">
        </form>
        <?php 
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $dt = $_POST['dt'];
                $ls = $_POST['ls'];
                $sn = $_POST['sn'];
                $num = $dt * ($ls * 0.01);
                $sum = $dt + ($num * $sn);
                echo "<h2>Tong so tien la: <span style='color:red'>" .$sum. "</span></h2>";
            }
        ?>
</body>
</html>