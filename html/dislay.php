<?php 
    $description = $_POST['description'];
    $price = $_POST['price'];
    $discuont = $_POST['discount'];

    $num = $price * $discuont * .01;
    $sum = $price - $num;

    $list_price = "$". number_format($price, 2);
    $discuont_price = $discuont . "%";
    $discuont_for = "$" . number_format($num, 2);
    $discuont_form = "$" . number_format($sum, 2);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Product Discount Calculator</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <div id="content">
            <h1>Product Discount Calculator</h1>
            <label>Product Description:</label>
            <span><?php echo $description ?></span><br />
            <label>List Price:</label>
            <span><?php echo $list_price ?></span><br />
            <label>Sandard Discount:</label>
            <span><?php echo $discuont_price ?></span><br />
            <label> Discount Amount:</label>
            <span><?php echo $discuont_for ?></span><br />
            <label>Discount Price:</label>
            <span><?php echo $discuont_form ?></span><br />
        </div>
        
    </body>
</html>