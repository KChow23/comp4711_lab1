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

    for($row=0; $row<3; $row++){
        //echo 'ROW VALUE: '. $row.PHP_EOL;
        $won = true;
        for($col=0; $col<3; $col++){
           // echo "COL VALUE: " . (3*$row+$col).PHP_EOL;
            echo "INDEX: ". (3*$row+$col);
            if($position[3*$row+$col] != $token){
                $won = false;
                break;
            }
        }
        if($won){
            return $won;
        }

    }
    for($row=0; $row<3; $row++){
        //echo 'ROW VALUE: '. $row.PHP_EOL;
        $won = true;
        for($col=0; $col<3; $col++){
            // echo "COL VALUE: " . (3*$row+$col).PHP_EOL;
            echo "INDEX: ". (3*$col+$row);
            if($position[3*$col+$row] != $token){
                $won = false;
                break;
            }
        }
        if($won){
            return $won;
        }

    }

    if( ($position[0] == $token) && ($position[4] == $token) && ($position[8] == $token) ){
        $won = true;
    }
    elseif( ($position[2] == $token) && ($position[4] == $token) && ($position[6] == $token) ){
        $won = true;
    }

    return $won;

}
?>