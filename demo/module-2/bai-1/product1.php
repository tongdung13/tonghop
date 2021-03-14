<?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $mt = $_POST['mt'];
            $gny = $_POST['gny'];
            $ck = $_POST['ck'];
            $am = $gny * $ck * 0.01;
            $pr = $gny - $am;
            echo $mt . "<br>so tien chiet khau la:<span style='color:red'> " . $am . "</span><br>so tien sau chieu khau la: <span style='color:red'>" . $pr ."</span";
        }
    ?>