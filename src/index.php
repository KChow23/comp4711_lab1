<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
    <?php
    /**
     * Created by PhpStorm.
     * User: Kevin
     * Date: 1/6/2016
     * Time: 10:06 AM
     */
    $temp = 'Kevin';
    $var = 'See?';
    echo 'Hello there, I am '. $temp. ' and I know how to use variables! '. $var.PHP_EOL;
    $rate = 15;
    $hours = $_GET['hours'];
    if($hours > 40){
        $total = $hours * $rate * 1.5;
    }
    else {
        $total = $hours * $rate;
    }
    echo ($total > 0)? 'Pay me '.$total : "You're welcome";
    ?>
    </body>
</html>
