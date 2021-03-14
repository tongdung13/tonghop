<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Product</title>
    <style> 
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc; 
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }
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
    <form method="POST" action="product1.php">
        <input class="form-control" type="text" name="mt" placeholder="mo ta">
        <input class="form-control" type="number" name="gny" placeholder="gia niem yet">
        <input class="form-control" type="number" name="ck" placeholder="chiet khau">
        <input type="submit" id="submit" value="result">
    </form>
    
</body>
</html>