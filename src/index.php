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
    if(! isset($_GET['board'])){
        echo "No board found";
    }
    else{
        $board = $_GET['board'];
        $squares = str_split($board);
        if(winner('x', $squares)){
            echo "You win!";
        }
        elseif(winner('o', $squares)){
            echo "I win!";
        }
        else{
            echo "No winner yet :(";
        }
    }
    ?>
    </body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 1/6/2016
 * Time: 10:06 AM
 */

function winner($token, $position) {
    $won = false;
    if( ($position[0] == $token) && ($position[1] == $token) && ($position[2] == $token) ){
        $won = true;
    }
    elseif( ($position[3] == $token) && ($position[4] == $token) && ($position[5] == $token) ){
        $won = true;
    }
    elseif( ($position[6] == $token) && ($position[7] == $token) && ($position[8] == $token) ){
        $won = true;
    }
    elseif( ($position[0] == $token) && ($position[3] == $token) && ($position[6] == $token) ){
        $won = true;
    }
    elseif( ($position[2] == $token) && ($position[5] == $token) && ($position[8] == $token) ){
        $won = true;
    }
    elseif( ($position[1] == $token) && ($position[4] == $token) && ($position[7] == $token) ){
        $won = true;
    }
    elseif( ($position[0] == $token) && ($position[4] == $token) && ($position[8] == $token) ){
        $won = true;
    }
    elseif( ($position[2] == $token) && ($position[4] == $token) && ($position[6] == $token) ){
        $won = true;
    }
    return $won;
}
?>