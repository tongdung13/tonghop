<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tu dien</title>
    <style> 
        input[type=text] {
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
        <input class="form-control" type="text" name="search" placeholder="search">
        <input class="form-control" type="submit" id="submit" value="tim">
    </form>
    <?php 
        $tu = [
            'hello' => 'xin chao',
            'goodmorning' => 'chao buoi sang',
            'dog' => 'cho'
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $search = $_POST['search'];
            $flag = 0;
            foreach($tu as $en => $vi) {
                if($search == $en) {
                    echo 'tu can tim: ' .$en . '<br> nghia la: ' . $vi;
                    $flag = 1;
                } 
            }
                if($flag == 0) {
                    echo 'khong tim thay tu';
            }
        }
    ?>
</body>
</html>